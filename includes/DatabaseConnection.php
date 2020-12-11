<?php
namespace Uta\Db;

    const HOST = 'localhost';
    const DBNAME = 'leocraft_utanew';
    const USERNAME = 'ukrtrans_admin';
    const PASSWORD = '!9&7TreeMind%0@';

    function getPdo()
    {
        $dsn = "mysql:host=" . \Uta\Db\HOST . ";dbname=" . \Uta\Db\DBNAME;
        $options = array(
            \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        );

        return new \PDO($dsn, \Uta\Db\USERNAME, \Uta\Db\PASSWORD, $options);
    }
