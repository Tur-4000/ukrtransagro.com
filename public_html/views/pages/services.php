<?php
use SimpleQueryBuilder\Query;

//$sql = "SELECT * FROM services WHERE id='1'";
//$services = pageData($sql);
$services = (new Query($pdo, 'services'))
    ->where('id', 1)
    ->fetch();
?>
<header class="page charact">
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
    <div>
        <block><?=$services['title_'.$lang];?></block>
        <ul class="serv">
            <li num="1"><?=$services['item_1_'.$lang];?></li>
            <li num="2"><?=$services['item_2_'.$lang];?></li>
            <li num="3"><?=$services['item_3_'.$lang];?></li>
            <li num="4"><?=$services['item_4_'.$lang];?></li>
            <li num="5"><?=$services['item_5_'.$lang];?></li>
            <li num="6"><?=$services['item_6_'.$lang];?></li>
            <li num="7"><?=$services['item_7_'.$lang];?></li>
            <li num="8"><?=$services['item_8_'.$lang];?></li>
        </ul>
        <a href="charact" class="char link"><?=$word['charact'];?></a>
    </div>
</centre>
