<?php
    use SimpleQueryBuilder\Query;

    $charact = (new Query($pdo, 'charact'))
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
            <?php
                if (!empty($page['intro_'.$lang])) {
            ?>
                    <intro><?=$page['intro_'.$lang];?></intro>
            <?php } ?>
            <?php
                if (!empty($page['text_'.$lang])) {
            ?>
                    <div class="text"><?=$page['text_'.$lang];?></div>
            <?php } ?>
            <div>
                <p class="h"><?=$word['char0'];?></p>
                <ul class="charact">
                    <li><?=$word['char1'];?><num><?=$charact['char1'];?></num><?=$word['char-tg'];?></li>
                    <li><?=$word['char2'];?><num><?=$charact['char2'];?></num><?=$word['char-t'];?></li>
                    <li><?=$word['char3'];?><num><?=$charact['char3'];?></num><?=$word['char-m'];?></li>
                    <li><?=$word['char4'];?><num><?=$charact['char4'];?></num><?=$word['char-t'];?></li>
                    <li><?=$word['char5'];?><num><?=$charact['char5'];?></num><?=$word['char-m'];?></li>
                    <li><?=$word['char6'];?><num><?=$charact['char6'];?></num><?=$word['char-ts'];?></li>
                    <li><?=$word['char7'];?><num><?=$charact['char7'];?></num><?=$word['char-ts'];?></li>
                    <li><?=$word['char8'];?><num><?=$charact['char8'];?></num><?=$word['char-ts'];?></li>
                    <li><?=$word['char9'];?><num><?=$charact['char9'];?></num><?=$word['char-max'];?></li>
                </ul>
                
            </div>
        </centre>
