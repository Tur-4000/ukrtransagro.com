<?php
use SimpleQueryBuilder\Query;
use function Uta\Helpers\formatDate;

//    $sql = "SELECT * FROM mission WHERE id='1'";
//    $mission = pageData($sql);
//    $sql = "SELECT * FROM charact WHERE id='1'";
//    $charact = pageData($sql);
//                $sql = "SELECT * FROM news WHERE public='yes' ORDER BY date DESC LIMIT 4";
//                $news = getData($sql);
    $mission = (new Query($pdo, 'mission'))
        ->where('id', 1)
        ->fetch();
    $charact = (new Query($pdo, 'charact'))
        ->where('id', 1)
        ->fetch();
    $news = (new Query($pdo, 'news'))
        ->where('public', 'yes')
        ->orderBy('date', "DESC")
        ->limit(4)
        ->all();
?>
<header>
    <div>
        <div class="heder">
            <div><h3><?=$page['headtitle_'.$lang];?></h3></div>
            <div>
                <p style="font-size: 22px; line-height: 24px;"><?=$page['headdecript_'.$lang];?></p>
                <a href="about" class="link more"><?=$word['details'];?></a>
            </div>
        </div>
        <a class="link tomain"></a>
    </div>
    <noindex><a href="http://www.eba.com.ua/uk" target="blank" rel="nofollow" class='eba'></a></noindex>
    <screen>
        <div class="play_button"></div><blur></blur>
        <video src="images/uta_video.mp4" preload="auto" poster="images/index.jpg"></video>
    </screen>
</header>

<div class="mission">
    <div><p class="h1"><?=$mission['mission_'.$lang];?></p><p><?=$mission['dmission_'.$lang];?></p></div>
    <div><p class="h1"><?=$mission['vision_'.$lang];?></p><p><?=$mission['dvision_'.$lang];?></p></div>
    <div><p class="h1"><?=$mission['value_'.$lang];?></p><p><?=$mission['dvalue_'.$lang];?></p></div>
</div>

<div class="culture">
    <p><?=$word['culture'];?></p>
    <div class="cult1"><p><?=$word['cult1'];?></p></div>
    <div class="cult2"><p><?=$word['cult2'];?></p></div>
    <div class="cult3"><p><?=$word['cult3'];?></p></div>
    <div class="cult4"><p><?=$word['cult4'];?></p></div>
    <div class="cult5"><p><?=$word['cult5'];?></p></div>
    <div class="cult6"><p><?=$word['cult6'];?></p></div>
    <div class="cult7"><p><?=$word['cult7'];?></p></div>
    <div class="cult8"><p><?=$word['cult8'];?></p></div>
</div>

<charact>
    <div><images style="background-image: url(images/3.png);"></images><border></border><div><p><?=$word['char2'];?></p><span><?=$charact['char2'];?></span><p><?=$word['char-t'];?></p></div><a href="charact"><?=$word['details'];?></a></div>
    <div><images style="background-image: url(images/2.png);"></images><border></border><div><p><?=$word['char7'];?></p><span><?=$charact['char7'];?></span><p><?=$word['char-ts'];?></p></div><a href="charact"><?=$word['details'];?></a></div>
    <div><images style="background-image: url(images/1.png);"></images><border></border><div><p><?=$word['char8'];?></p><span><?=$charact['char8'];?></span><p><?=$word['char-ts'];?></p></div><a href="charact"><?=$word['details'];?></a></div>
    <div><images style="background-image: url(images/5.png);"></images><border></border><div><p><?=$word['char1'];?></p><span><?=$charact['char1'];?></span><p><?=$word['char-tg'];?></p></div><a href="charact"><?=$word['details'];?></a></div>
    <div><images style="background-image: url(images/4.png);"></images><border></border><div><p><?=$word['char6'];?></p><span><?=$charact['char6'];?></span><p><?=$word['char-ts'];?></p></div><a href="charact"><?=$word['details'];?></a></div>
    <div><images style="background-image: url(images/6.png);"></images><border></border><div><p><?=$word['char4'];?></p><span><?=$charact['char4'];?></span><p><?=$word['char-t'];?></p></div><a href="charact"><?=$word['details'];?></a></div>
</charact>

<centre>
    <div class="news newsmain">
        <?php
            foreach ($news as $item):
                $localizedDate = formatDate($item['date'], $word);
                if(empty($item['img'])) {
                    $img = 'cover.png';
                } else {
                    $img = $item['img'];
                }
        ?>
                <div>
                    <foto style="background-image: url(userfiles/news/<?=$img;?>);"></foto>
                    <type><?=$word[$item['type']];?></type>
                    <date><?=$localizedDate;?></date>
                    <p><?=$item['title_'.$lang]?></p>
                    <more><a href="news/<?=$item['url']?>"><?=$word['details'];?></a></more>
                </div>
        <?php endforeach; ?>
    </div>
    <div class="clear"></div>
    <a href="news" class="allnews link"><?=$word['allnews'];?></a>
    <?php if(!empty($page['intro_'.$lang])) {?><intro style="margin-top: 50px;"><?=$page['intro_'.$lang];?></intro><?php } ?>
    <div>
        <?php if(!empty($page['text_'.$lang])) {?><div class="text" style="margin-top: 50px;"><?=$page['text_'.$lang];?></div><?php } ?>
    </div>
</centre>
        
