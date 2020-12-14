<?php
namespace Uta\Helpers;

use SimpleQueryBuilder\Query;

const MAX_FILE_SIZE = 1024 * 1024 * 2;

function formatDate(string $date, array $word)
{
    $timeStamp = strtotime($date);
    $y = date("Y", $timeStamp);
    $m = date("m", $timeStamp);
    $d = date("d", $timeStamp);

    return "$d {$word[$m]} $y";
}

function clearData($data)
{
    $data = htmlspecialchars(trim($data));
    return $data;
}

/**
 * Транслитерация символов для title_url (генерация slug)
 *
 * @param $str
 * @return string
 */
//function translit($str)
function slugify($str)
{
    $tr = array(
        "А" => "a", "Б" => "b", "В" => "v", "Г" => "g", "Д" => "d", "Е" => "e", "Ё" => "e", "Ж" => "j", "З" => "z",
        "И" => "i", "Й" => "y", "К" => "k", "Л" => "l", "М" => "m", "Н" => "n", "О" => "o", "П" => "p", "Р" => "r",
        "С" => "s", "Т" => "t", "У" => "u", "Ф" => "f", "Х" => "h", "Ц" => "ts", "Ч" => "ch", "Ш" => "sh", "Щ" => "sch",
        "Ъ" => "", "Ы" => "i", "Ь" => "j", "Э" => "e", "Ю" => "yu", "Я" => "ya", "а" => "a", "б" => "b", "в" => "v",
        "г" => "g", "д" => "d", "е" => "e", "ё" => "e", "ж" => "j", "з" => "z", "и" => "i", "й" => "y", "к" => "k",
        "л" => "l", "м" => "m", "н" => "n", "о" => "o", "п" => "p", "р" => "r", "с" => "s", "т" => "t", "у" => "u",
        "ф" => "f", "х" => "h", "ц" => "ts", "ч" => "ch", "ш" => "sh", "щ" => "sch", "ъ" => "y", "ы" => "i", "ь" => "j",
        "э" => "e", "ю" => "yu", "я" => "ya", " " => "_", "." => "", "/" => "_", "," => "_", "-" => "_", "(" => "",
        ")" => "", "[" => "", "]" => "", "=" => "_", "+" => "_", "*" => "", "?" => "", "\"" => "", "'" => "", "&" => "",
        "%" => "", "#" => "", "@" => "", "!" => "", ";" => "", "№" => "", "^" => "", ":" => "", "~" => "", "\\" => ""
    );
    return strtr($str, $tr);
}

/**
 * Загрузка файлов на сервер
 *
 * @param $table
 * @return bool|string
 */
function uploadFile($table)
{
    $filename = $_FILES['filename']['name'];
    $size = $_FILES['filename']['size'];
    $source = $_FILES['filename']['tmp_name'];
    $pattern = '/(?i)[.](jpg)$|(jpeg)$|(gif)$|(png)$|(pdf)$/';

    if (preg_match($pattern, $filename) && $size < MAX_FILE_SIZE) {
        $newName = date('Y-M-d-His');
        // проверяем расширение файла
        if (preg_match('/(?i)[.](jpeg)|(jpg)$/', $filename)) {
            $newName .= '.jpg';
        } elseif (preg_match('/(?i)[.](png)$/', $filename)) {
            $newName .= '.png';
        } elseif (preg_match('/(?i)[.](gif)$/', $filename)) {
            $newName .= '.gif';
        } elseif (preg_match('/(?i)[.](pdf)$/', $filename)) {
            $newName .= '.pdf';
        }

        if ($table == 'users') {
            $target = 'upload/users/' . $newName;
        } else {
            $target = '../userfiles/' . $table . '/' . $newName;
        }

        move_uploaded_file($source, $target);

        return $newName;
    } else {
        return false;
    }
}

/**
 * Удаление данных и связанных файлов
 *
 * @param $table
 * @param $id
 */
function deleteData($pdo, $table, $id)
{
    if ($table === 'reports') {
        $result = (new Query($pdo, $table))
            ->select(['report_file_name'])
            ->where('id', $id)
            ->all();
    } else {
        $result = (new Query($pdo, $table))
            ->select(['img'])
            ->where('id', $id)
            ->all();
    }

    if (!empty ($result['img'])) {
        if ($table == 'newsfoto') {
            $target = '../userfiles/news/newsAlbum/' . $result['img'];
            unlink($target);
        } elseif ($table == 'users') {
            $target = 'upload/users/' . $result['img'];
            unlink($target);
        } elseif ($table == 'gallery') {
            $target = '../userfiles/gallery/mini/' . $result['img'];
            unlink($target);
            $target = '../userfiles/gallery/' . $result['img'];
            unlink($target);
        } elseif ($table == 'news') {
            $target = '../userfiles/news/'.$result['img'];
            unlink($target);
            $fotos = (new Query($pdo, 'newsfoto'))
                ->select(['id', 'img'])
                ->where('news_id', $id)
                ->all();
            foreach ($fotos as $foto) {
                $idfoto = ($foto['id']);
                unlink('../userfiles/news/newsAlbum/' . $foto['img']);
                (new Query($pdo, 'newsfoto'))
                    ->where('id', $idfoto)
                    ->delete();
            }
        } else {
            $target = '../userfiles/'.$table.'/'.$result['img'];
            unlink($target);
        }
    }

    if (!empty($result['report_file_name'])) {
        $target = '../userfiles/reports/' . $result['report_file_name'];
        unlink($target);
    }

    (new Query($pdo, $table))
        ->where('id', $id)
        ->delete();
}

function createMini($filename, $table) {

    switch ($table){
        case "news": $width = 450; break;
        case "team": $width = 250; break;
        case "users": $width = 200; break;
        case "gallery": $width = 250; break;
        case "actives": $width = 350; break;
    }
    $target = '../userfiles/'.$table.'/'.$filename;
    $im = imagecreatefromjpeg($target); // берем загруженное изображение с сервера
    $ox = imagesx($im); // получаем его ширину
    $oy = imagesy($im); // получаем его высоту
    $nx = $width; // задаем новую ширину
    $ny = floor($oy * ($width / $ox)); // изменяем пропорционально высоту и округляем
    $nm = imagecreatetruecolor($nx, $ny); // Создание нового полноцветного изображения
    imagecopyresized($nm, $im, 0,0,0,0,$nx,$ny,$ox,$oy); // Копирование и изменение размера части изображения
    if ($table == 'gallery') {
        $target = '../userfiles/gallery/mini/'.$filename;
    }
    imagejpeg($nm, $target); // Выводит изображение в файл
}

function resize($filename, $path)
{
    $width = 900;
    $im = imagecreatefromjpeg($path . $filename);
    $ox = imagesx($im);
    $oy = imagesy($im);
    $nx = $width;
    $ny = floor($oy * ($width / $ox));
    $nm = imagecreatetruecolor($nx, $ny);
    imagecopyresized($nm, $im, 0,0,0,0,$nx,$ny,$ox,$oy);
    imagejpeg($nm, $path . $filename);
}

/**
 * Мультизагрузка файлов на сервер
 *
 * @param array $files Массив загружаемых файлов
 * @param string $table Таблица БД
 * @param integer $id ID альбома, в который загружаем фото
 * @param PDO $pdo экземпляр PDO
 * @return null
 */
function uploadMultiFiles($files, $table, $id, \PDO $pdo)
{
    $blacklist = getBlacklist();
    $q = 1;
    if ($table == 'newsfoto') {
        $path = '../userfiles/news/newsAlbum/';
    }
    foreach ($files['name'] as $i => $filename) {
        //Проверка, что при загрузке файла не произошла ошибка
        if ($files['error'][$i] == UPLOAD_ERR_OK) {
            //Проверка расширения
            foreach ($blacklist as $item) {
                if (preg_match("/$item\$/i", $filename)) {
                    continue;
                }
            }
            //проверка mime-типа и размера
            if (in_array($files['type'][$i], getAllowedMimeType()) && $files['size'][$i] < 1024*2*1024) {

                $newName = $id.'_'.date('Y-M-d_His').'_'.$q;
                // проверяем расширение файла
                if (preg_match('/[.](jpeg)$/', $filename)) { // если JPEG то меняем на JPG
                    $filename = $newName.'.jpg';
                } else { // иначе просто режем имя на 4 символа по . включительно
                    $filename = substr($filename, -4);
                    $filename = $newName.$filename;
                }
                //загружаем файл
                move_uploaded_file($files['tmp_name'][$i], $path.$filename);
                // функция уменьшения изображения
                resize($filename,$path);
                //Вставляем в БД
                (new Query($pdo, $table))
                    ->prepareData(['news_id', 'img'], [$id, $filename])
                    ->insert();
//                insertData($table, array('news_id', 'img'), array("'".$id."'", "'".$filename."'"));
                $q++;
            } else {
                return false;
            }
        }
    }
}

/**
 * @param $files
 * @param $table
 * @param PDO $pdo
 * @return bool
 */
function uploadFilesGallery($files, $table, \PDO $pdo)
{
    $blacklist = getBlacklist();
    $q = 1;
    $path = '../userfiles/gallery/';
    $pathMini = '../userfiles/gallery/mini/';
    foreach ($files['name'] as $i => $filename) {
        //Проверка, что при загрузке файла не произошла ошибка
        if ($files['error'][$i] == UPLOAD_ERR_OK) {
            //Проверка расширения
            foreach ($blacklist as $item) {
                if (preg_match("/$item\$/i", $filename)) {
                    continue;
                }
            }
            //проверка mime-типа и размера
            if (in_array($files['type'][$i], getAllowedMimeType()) && $files['size'][$i] < 1024*2*1024) {
                $newName = date('Y-M-d_His').'_'.$q;
                // проверяем расширение файла
                if (preg_match('/[.](jpeg)$/', $filename)) { // если JPEG то меняем на JPG
                    $filename = $newName.'.jpg';
                }
                else { // иначе просто режем имя на 4 символа по . включительно
                    $filename = substr($filename, -4);
                    $filename = $newName.$filename;
                }
//var_dump($filename); exit();
                //загружаем файл
                move_uploaded_file($files['tmp_name'][$i], $path.$filename);
                resize($filename, $path);
                createMini($filename, $table);
                (new Query($pdo, $table))
                    ->prepareData(['img'], [$filename])
                    ->insert();
//                insertData($table, array('img'), array("'".$filename."'"));
                $q++;
            }
            else return false;
        }
    }
}

function deleteFotos($table, $delfotos, \PDO $pdo)
{
    foreach ($delfotos as $id => $foto) {
        (new Query($pdo, $table))
            ->where('id', $id)
            ->delete();
//        mysql_query("DELETE FROM $table WHERE id='$id'");
        if($table == 'newsfoto') {
            unlink('../userfiles/news/newsAlbum/'.$foto);
        }
        if($table == 'gallery') {
            unlink('../userfiles/gallery/'.$foto);
            unlink('../userfiles/gallery/mini/'.$foto);
        }
    }
}

function getBlacklist()
{
    return array(".php", ".phtml", ".php3", ".php4", ".html", ".htm", ".txt", ".js");
}

function getAllowedMimeType()
{
    return array("image/jpg", "image/jpeg", "image/png", "image/gif");
}
