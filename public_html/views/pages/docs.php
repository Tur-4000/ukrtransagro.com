<?php
use SimpleQueryBuilder\Query;

//$sql = "SELECT * FROM docs WHERE public='yes' ORDER BY num";
//$docs = getData($sql);
$docs = (new Query($pdo, 'docs'))
    ->where('public', 'yes')
    ->orderBy('num')
    ->all();
?>
<header class="page docs">
    <foto></foto>
    <div>
        <div class="heder">
            <div><h3><?=$page['headtitle_'.$lang];?></h3></div>
            <div><p><?=$page['headdecript_'.$lang];?></p></div>
        </div>
        <a href="" class="link tomain"></a>
    </div>
</header>
<centre>
    <?php if(!empty($page['intro_'.$lang])): ?>
        <intro><?=$page['intro_'.$lang];?></intro>
    <?php endif; ?>
    <?php if(!empty($page['text_'.$lang])): ?>
        <div><?=$page['text_'.$lang];?></div>
    <?php endif; ?>
    <div class="docs" id="thumbs">
        <?php foreach ($docs as $item): ?>
            <a href="userfiles/docs/<?=$item['img'];?>">
                <foto style="background-image: url(userfiles/docs/<?=$item['img'];?>);"></foto>
                <span>*/<?=$item['title_'.$lang];?></span>
                <p><?=$item['descript_'.$lang];?></p>
            </a>
        <?php endforeach; ?>
    </div>
</centre>
