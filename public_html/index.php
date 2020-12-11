<?php
// редирект на HTTPS

if(!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == ""){
    $redirect = "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: $redirect");
}

//require_once(__DIR__ . '/../app/stat.php');

$base = $_SERVER['HTTP_HOST'];
const BASE_DIR = __DIR__;

$autoloadPath1 = __DIR__ . '/../../../autoload.php';
$autoloadPath2 = __DIR__ . '/../vendor/autoload.php';
if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}

use SimpleQueryBuilder\Query;

use function Uta\Db\getPdo;

$pdo = getPdo();

//// ПРОВЕРКА GET ЗАПРОСОВ НА ЯЗЫКИ ----------------------------------------------
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
} else {
    $lang = 'ru';
}

include 'views/lang/'.$lang.'.php';

if (!isset($_GET['view']) && !isset($_GET['uaview']) && !isset($_GET['enview'])) {
    $view = 'main';
}

if (isset($_GET['view'])) {
    $view = $_GET['view'];
}
if (isset($_GET['cat'])) {
    $cat = $_GET['cat'];
}
if (isset($_GET['podcat'])) {
    $podcat = $_GET['podcat'];
}

if (isset($_GET['uaview'])) {
    $view = $_GET['uaview'];
}
if (isset($_GET['uacat'])) {
    $cat = $_GET['uacat'];
}
if (isset($_GET['uapodcat'])) {
    $podcat = $_GET['uapodcat'];
}

if (isset($_GET['enview'])) {
    $view = $_GET['enview'];
}
if (isset($_GET['encat'])) {
    $cat = $_GET['encat'];
}
if (isset($_GET['enpodcat'])) {
    $podcat = $_GET['enpodcat'];
}

//// TITLE & DESCRIPTION ---------------------------------------------------------
if (!isset($cat)) {
    $data = (new Query($pdo, 'pages'))
        ->select(["title_$lang", "descript_$lang"])
        ->where('view', $view)
        ->fetch();

    $titlePage = $data['title_'.$lang];
    $descriptPage = $data['descript_'.$lang];
} else {
    $data = (new Query($pdo, $view))
        ->select(["title_$lang", "descript_$lang"])
        ->where('url', $cat)
        ->fetch();
    $titlePage = $data['title_'.$lang];
    $descriptPage = $data['descript_'.$lang];
}
// ВЫБОРКА СТАТИЧЕСКИХ МАТЕРИАЛОВ ---------------------------------------------------------
$requisites = (new Query($pdo, 'requisites'))
    ->where('id', 1)
    ->fetch();

$page = (new Query($pdo, 'pages'))
    ->where('view', $view)
    ->fetch();

// ПАРТНЕРСКИЕ ССЫЛКИ ---------------------------------------------------------
if ($lang == 'ru') {
    $partnerLang = '';
} else {
    $partnerLang = $lang;
}
//// ПОДГОТОВКА ЛИНКОВ -----------------------------------------------------------
if ($view == 'main') {
    $link = '';
} else {
    $link = $view;
}
if (isset($cat)) {
    $link = $view.'/'.$cat;
}
if (isset($podcat)) {
    $link = $view.'/'.$cat.'/'.$podcat;
}
// РЕДИРЕКТ ---------------------------------------------------------
if ($view == 'client') {
    header('Location: http://uta.dn.ua/client.html', true, 301);
}
// ПОДКЛЮЧЕНИЕ ШАБЛОНА ---------------------------------------------------------
$pages = array_map(function ($page) {
    return $page['view'];
}, (new Query($pdo, 'pages'))->select(["view"])->all());

if (!in_array($view, $pages) || $view === 'error') {
    $view = 'error/404';
}
require_once 'views/site.php';
