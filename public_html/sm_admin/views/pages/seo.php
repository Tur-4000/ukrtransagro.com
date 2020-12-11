<?php
use SimpleQueryBuilder\Query;

//    $sql = "SELECT id,menu_ru FROM pages";
//    $data = getData($sql);
    $data = (new Query($pdo, 'pages'))
        ->select(['id', 'menu_ru'])
        ->all();
?>
<h1>Управление SEO [ title, description, keywords  ]</h1>
<?php foreach ($data as $item): ?>
    <a link="pages_seo" id='<?=$item['id']?>' class="selection"><?=$item['menu_ru']?></a>
<?php endforeach; ?>
<div class="edit work seo editWindow">
    <div class="close">закрыть</div>
    <form action="" method="post">

    </form>
</div>