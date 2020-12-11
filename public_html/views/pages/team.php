<?php
use SimpleQueryBuilder\Query;

//$sql = "SELECT * FROM team WHERE public='yes' ORDER BY num";
//$team = getData($sql);
    $team = (new Query($pdo, 'team'))
        ->where('public', 'yes')
        ->orderBy('num')
        ->all();
?>
<header class="page">
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
    <div class="team">
        <?php foreach ($team as $item): ?>
            <div>
                <foto <?php if (empty($item['img'])): ?>
                            class="nofoto"
                      <?php else: ?>
                            style="background-image: url(userfiles/team/<?=$item['img'];?>);"
                      <?php endif; ?>
                ></foto>
                <name><?=$item['title_'.$lang];?></name>
                <pos><?=$item['position_'.$lang];?></pos>
            </div>
        <?php endforeach; ?>
    </div>
</centre>
