<?php
use SimpleQueryBuilder\Query;
use function Uta\Helpers\formatDate;

if(!isset($cat)):
    $news = (new Query($pdo, 'news'))
        ->select(["url", "date", "img", "title_$lang", "descript_$lang"])
        ->where('public', 'yes')
        ->where('type', 'news')
        ->orderBy('date', 'DESC')
        ->limit(16)
        ->all();

    $press = (new Query($pdo, 'news'))
        ->select(["url", "date", "img", "title_$lang", "descript_$lang"])
        ->where('public', 'yes')
        ->where('type', 'press')
        ->orderBy('date', 'DESC')
        ->limit(16)
        ->all();
?>
<header class="page news">
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
    <div class="block">
        <?php if(!empty($page['intro_'.$lang])) {?><intro><?=$page['intro_'.$lang];?></intro><?php }?>
        <?php if(!empty($page['text_'.$lang])) {?><div class="text"><?=$page['text_'.$lang];?></div><?php }?>
        <div class="news cols tape">
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
                        <date><?=$localizedDate;?></date>
                        <p><?=$item['title_'.$lang]?></p>
                        <span><?=$item['descript_'.$lang]?></span>
                        <more><a href="news/<?=$item['url']?>"><?=$word['details'];?></a></more>
                    </div>
            <?php endforeach; ?>
        </div>
        <div class="apress cols">
            <h6><?=$word['press'];?></h6>
            <?php
                foreach ($press as $item):
                    $localizedDate = formatDate($item['date'], $word);
                    if (empty($item['img'])) {
                        $img = 'cover.png';
                    } else {
                        $img = $item['img'];
                    }
            ?>
                    <div>
                        <foto style="background-image: url(userfiles/news/<?=$img;?>);"></foto>
                        <date><?=$localizedDate;?></date>
                        <p><?=$item['title_'.$lang]?></p>
                        <more><a href="news/<?=$item['url']?>"><?=$word['details'];?></a></more>
                    </div>
            <?php endforeach; ?>
        </div>
        <div class="clear"></div>
        <a href="newsarchives" class="allnews link"><?=$word['arcnews'];?></a>
    </div>
</centre>
<?php
else:
    include 'views/pages/news-view.php';
endif;
?>
