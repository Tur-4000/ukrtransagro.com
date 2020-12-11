<?php
use SimpleQueryBuilder\Query;

//$sql = "SELECT * FROM gallery ORDER BY num";
//$gallery = getData($sql);
    $gallery = (new Query($pdo, 'gallery'))
    ->orderBy('num')
    ->all();
?>
<header class="page press">
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
    <?php if(!empty($page['intro_'.$lang])) {?><intro><?=$page['intro_'.$lang];?></intro><?php } ?>
    <?php if(!empty($page['text_'.$lang])) {?><div class="text"><?=$page['text_'.$lang];?></div><?php } ?>
    <div class="gallery" id="thumbs">
        <?php foreach ($gallery as $gal): ?>
        <a href="userfiles/gallery/<?=$gal['img']?>" style="background-image: url(userfiles/gallery/<?=$gal['img']?>);"></a>
        <?php endforeach; ?>
    </div>
</centre>