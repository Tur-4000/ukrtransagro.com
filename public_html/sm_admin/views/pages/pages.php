<?php
use SimpleQueryBuilder\Query;

//$sql = "SELECT id,menu_ru FROM pages";
//$data = getData($sql);
$data = (new Query($pdo, 'pages'))
    ->select(["id", "menu_ru"])
    ->all();
?>
<h1>Управление Страницами сайта [ контент, блоки ]</h1>
<?php foreach ($data as $item): ?>
    <a href="page-edit/<?=$item['id']?>" class="selection"><?=$item['menu_ru']?></a>
<?php endforeach; ?>
                    