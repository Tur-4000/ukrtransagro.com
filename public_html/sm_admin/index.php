<?php

$autoloadPath1 = __DIR__ . '/../../../autoload.php';
$autoloadPath2 = __DIR__ . '/../../vendor/autoload.php';
if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}

use SimpleQueryBuilder\Query;

use function Uta\Db\getPdo;

use function Uta\Helpers\clearData;
use function Uta\Helpers\slugify;
use function Uta\Helpers\uploadFile;
use function Uta\Helpers\uploadMultiFiles;
use function Uta\Helpers\uploadFilesGallery;
use function Uta\Helpers\deleteFotos;
use function Uta\Helpers\deleteData;

use function Uta\User\checkUser;
use function Uta\User\getUserStatus;
use function Uta\User\exitUser;
use function Uta\User\changePswd;
use function Uta\User\forgot;

$base = $_SERVER['HTTP_HOST'];
$pdo = getPdo();

//include ('core/connectDb.php');
//include ('core/adminFns.php');
//include ('core/regFns.php');

include ('views/lang/ru.php');

//if(empty($_GET['view'])) $view = 'login';
if (!isset($_GET['view'])) {
    $view = 'main';
} else {
    $view = $_GET['view'];
}
$idRow = $_GET['idRow'] ?? '';
$id = $_GET['id'] ?? '';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = $_GET['id'] ?? '';
    $id = $_GET['idRow'] ?? '';
}

session_start();
// Проверка пользователя ---------------------------------------------------------------------------------------------
if (!empty($_SESSION['username']) && ($_SESSION['status']) == 'admin') {
// РЕДАКТИРОВАНИЕ ДАННЫХ В БАЗЕ -------------------------------------------------------------------------
    if (isset($_POST['edit'])) {
//        echo "<pre>"; var_dump($_POST);die();
        $id = $_POST['id'];
        $table = $_POST['table'];
        $oldImg = $_POST['oldImg'];
        if ($_POST['password']) {  // шифруем пароль
            $_POST['password'] = sha1(md5(clearData($_POST['password'])));
        }
        // удаляем не уже не нужные переменные из POST
        unset($_POST['edit']);
        unset($_POST['table']);
        unset($_POST['id']);
        unset($_POST['oldImg']);
        // формируем массив
        $count = 0;
        foreach ($_POST as $ArrKey => $ArrStr) {
            $row[$count] = $ArrKey;
            $data[$count] = $_POST[$ArrKey];
            $count ++;
        }

        if (!empty($_FILES['filename']['name'])) { // если переменная содержит то что указанно
//            if(($table == 'users') && (empty($oldImg))) {
//
//            } elseif (($table == 'users') && (!empty($oldImg))) {  // удаляем старую картинку
//                $pathImg = 'upload/users/'.$oldImg; unlink($pathImg);
//            } elseif ($oldImg !== '') {  // удаляем старую картинку
//                $pathImg = '../userfiles/'.$table.'/'.$oldImg;
//                unlink($pathImg);
//            }
            // удаляем старую картинку если она есть
            if (!empty($oldImg)) {
                if ($table == 'users') {
                    $pathImg = 'upload/users/'.$oldImg;
                    unlink($pathImg);
                } else {
                    $pathImg = '../userfiles/'.$table.'/'.$oldImg;
                    unlink($pathImg);
                }
            }

            $img = uploadFile($table);
            $row[$count] = 'img';
            $data[$count] = $img;
        }

        unset($_POST);
//        updateData($table, $id, $row, $data);
        (new Query($pdo, $table))
            ->prepareData($row, $data)
            ->where('id', $id)
            ->update();
    }
// ДОБАВЛЕНИЕ ДАННЫХ В БАЗУ -------------------------------------------------------------------------
    if (isset($_POST['add'])) {
        $table = $_POST['table'];
        if (isset($_POST['password'])) {  // шифруем пароль
            $_POST['password'] = sha1(md5(clearData($_POST['password'])));
        }
        // удаляем не уже не нужные переменные из POST
        unset($_POST['add']);
        unset($_POST['table']);
        // формируем массив
        $count = 0;

        foreach ($_POST as $ArrKey => $ArrStr) {
            if (!empty($_POST[$ArrKey])) {
                $row[$count] = strip_tags(clearData($ArrKey));
                $inputData = clearData("$_POST[$ArrKey]");

                if ($ArrKey === 'descript_ru' || $ArrKey === 'descript_ua' || $ArrKey === 'descript_en') {
                    $data[$count] = mb_substr($inputData, 0, 252) . '...';
                } else {
                    $data[$count] = $inputData; //$_POST[$ArrKey];
                }

                if (($ArrKey == 'title_ru') && (($table == 'news') || ($table == 'team'))) { // создание урл материала
                    $row[++$count] = 'url';
                    $data[$count] = slugify($_POST['title_ru']);
                }

                $count ++;
            }
//TODO: переписать обработку для таблицы reports
            if (in_array($table, array('news', 'gallery', 'users', 'docs', 'reports'))) { // если переменная содержит то что указанно
                $img = uploadFile($table);
                if ((!empty($img)) && ($row[$count] == 'img')) {
                    $data[$count] = uploadFile($table);
                }
                $row[$count] = 'img';
                $data[$count] = "$img";
            }
        }
        unset($_POST);

//        $last = insertData($table,$row,$data);
//        $id = getLastData($table);
//        $link = $table.'-edit/'.$id['id'];
//        header('Location: '.$link);

        (new Query($pdo, $table))
            ->prepareData($row, $data)
            ->insert();
        $id = $pdo->lastInsertId();
        $link = $table . '-edit/' . $id;
        header('Location: '.$link);
    }
// ДОБАВЛЕНИЕ ФОТОГРАФИЙ В БАЗУ -------------------------------------------------------------------------
    if (isset($_POST['addfotos'])) {
        $id = $_POST['id'];
        if ($_POST['table'] == 'news') {
            $table = 'newsfoto';
        }
        $date = $_POST['date'];
        uploadMultiFiles($_FILES['filename'], $table, $id, $pdo);
        header('Location: '.$id);
    }
    if (isset($_POST['addgallery'])) {
        $table = 'gallery';
        uploadFilesGallery($_FILES['filename'], $table, $pdo);
        header('location:'.$_SERVER['HTTP_REFERER']);
    }
    if (isset($_POST['delPhotos'])) {
        $table = clearData($_POST['table']);
        unset($_POST['delPhotos']);
        unset($_POST['table']);
        $delfotos = $_POST;
        deleteFotos($table, $delfotos, $pdo);
        header('location:'.$_SERVER['HTTP_REFERER']);
    }
// ---------------------------------------------------------------------------------------------------------------
    switch ($action)
    {
        // ---------------------------------------------------------------------------------------------------------------
        case "delete":
            $table = $view;
            deleteData($pdo, $table, $id);
            header('location:'.$_SERVER['HTTP_REFERER']);
            break;
        case "delete-foto":
            $table = 'newsfoto';
            deleteData($pdo, $table, $id);
            header('location:'.$_SERVER['HTTP_REFERER']);
            break;
        case "delete-foto-gallery":
            $table = 'gallery';
            deleteData($pdo, $table, $id);
            header('location:'.$_SERVER['HTTP_REFERER']);
            break;
    }
    switch ($view)
    {
        // ---------------------------------------------------------------------------------------------------------------
        case "exit": // выход из личного кабинета
            exitUser(); // вызываем функцию из db_fns.php
            header('Location: login'); // перезагружаем на главную страницу
            break;
        // ---------------------------------------------------------------------------------------------------------------
        case "forgot": // восстановление пароля
            if (isset($_POST['send']) && !empty($_POST['username']) && !empty($_POST['email'])) {  // если нажата кнопка ОТПРАВИТЬ и поля не пустые то...
                $user = clearData($_POST['username']); // ...принимаем значения в полях ...
                $email = clearData($_POST['email']); // ...принимаем значения в полях ...
                if (forgot($pdo, $user, $email)) { // если функция FORGOT возвращает TRUE...
                    $pswd = rand(10000,99999); // генерируем новый пароль из 5 цифр...
                    $subject = "Восстановление пароля!"; // тема письма...
                    $msg = "Ваш временный пароль: ".$pswd.". Рекомендуме сменить временный пароль на более сложный!"; // сообщение...
                    $headers = "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма...
                    mail($email, $subject, $msg, $headers); // отправляем письмо...
                    // -------------------------------------------------------------
                    $pswd = sha1(md5('$pswd')); // шифруем пароль...
                    changePswd($pdo, $pswd, $user); // вызываем функцию изменения пароля в базе...
                    $info = 'Ваш пароль успешно заменен и выслан Вам на почту!'; // сообщаем об успехе
                } else { // иначе, если функция FORGOT возвращает FALSE...
                    $info = 'Пользователь с такий логином и емейлом не зарегистрирован!'; // сообщаем об ошибке
                }
            }
            break;
    }
    // ---------------------------------------------------------------------------------------------------------------
    require_once 'views/admin.php';
} else {
    if (isset($_POST['enter']) && !empty($_POST['login']) && !empty($_POST['password'])) {
        $login = clearData($_POST['login']);
        $pswd = sha1(md5(clearData($_POST['password'])));
        unset($_POST);

        if (checkUser($pdo, $login, $pswd)) {
            $status = getUserStatus($pdo, $login);
            $_SESSION['username'] = $login;
            $_SESSION['status'] = $status['status'];
            header("Location: main");
        } else header("Location: login");
    }
    require_once 'views/login.php';
}
