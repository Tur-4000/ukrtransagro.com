<?php

namespace Stats\Db;

const STATS_HOST = 'localhost';
const STATS_DBNAME = 'webstats';
const STATS_USERNAME = 'webstatsuser';
const STATS_PASSWORD = 'grV1nT2H29X3A!B!^Ya8';

function getStatsPdo()
{
    $statsDsn = "mysql:host=" . STATS_HOST . ";dbname=" . STATS_DBNAME;
    $options = array(
        \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    );

    return new \PDO($statsDsn, STATS_USERNAME, STATS_PASSWORD, $options);
}
