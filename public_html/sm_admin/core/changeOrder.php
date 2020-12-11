<?php
$autoloadPath1 = __DIR__ . '/../../../autoload.php';
$autoloadPath2 = __DIR__ . '/../../../vendor/autoload.php';
if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}

use SimpleQueryBuilder\Query;
use function Uta\Helpers\clearData;
use function Uta\Db\getPdo;

$pdo = getPdo();

    $table = clearData($_POST['table']);
    $data = $_POST['id'];
    $i = 1;
    foreach ($data as $item){
        $id = (int) abs($item);
        (new Query($pdo, $table))
            ->prepareData(['num'], [$i])
            ->where('id', $id)
            ->update();
        $i++;
    }
