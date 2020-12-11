<?php
namespace Uta\User;

use SimpleQueryBuilder\Query;

function checkUser($pdo, $login, $pswd)
{
    $data = [
        'select' => "username, password",
        'where' => ['username' => $login, 'password' => $pswd],
    ];
    $user = new Query($pdo, 'users', $data);

    return $user->count() > 0;
}

function getUserStatus($pdo, $login)
{
    return (new Query($pdo, 'users'))
        ->select(['status'])
        ->where('username', $login)
        ->fetch();
}

/**
 * функция выхода из кабинета
 */
function exitUser()
{
    unset($_SESSION['username']);
}

/**
 * регистрация нового пользователя
 *
 * @param PDO $pdo
 * @param array $reg ['username', 'password', 'email']
 */
function register(\PDO $pdo, array $reg)
{
    $fields = ['username', 'password', 'email'];
    (new Query($pdo, 'users'))
        ->prepareData($fields, $reg)
        ->insert();
}

/**
 * смена пароля
 *
 * @param PDO $pdo
 * @param string $pswd
 * @param string $user
 */
function changePswd(\PDO $pdo, string $pswd, string $user)
{
    (new Query($pdo, 'users'))
        ->prepareData(['password'], [$pswd])
        ->where('username', $user)
        ->update();
}

function forgot(\PDO $pdo, string $user, string $email)
{
    $result = (new Query($pdo, 'users'))
        ->where('username', $user)
        ->where('email', $email)
        ->count();

    return $result > 0;
}
