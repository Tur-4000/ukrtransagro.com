<?php

namespace Stats;

require_once(__DIR__ . '/db.php');

$data[] = $_SERVER['SERVER_NAME'];
$data[] = $_SERVER['HTTP_USER_AGENT'];
$data[] = $_SERVER['REMOTE_ADDR'];
$data[] = date("Y-m-d H:i:s", (int) $_SERVER['REQUEST_TIME']);

$statsPdo = \Stats\Db\getStatsPdo();
$sql = "INSERT INTO `stats` SET `server_name`=?, `user_agent`=?, `remote_addr`=?, `request_time`=?";
$stmt = $statsPdo->prepare($sql);
$stmt->execute($data);
