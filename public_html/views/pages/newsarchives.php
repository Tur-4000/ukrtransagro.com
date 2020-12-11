<?php
use SimpleQueryBuilder\Query;
use function Uta\Helpers\formatDate;

//    $sql = "SELECT * FROM news WHERE public='yes' ORDER BY date DESC";
//    $news = getData($sql);
    $news = (new Query($pdo, 'news'))
        ->select(["url", "date", "img", "type", "title_$lang", "descript_$lang"])
        ->where('public', 'yes')
        ->orderBy('date', 'DESC')
        ->limit(100, 16)
        ->all();
?>
<header class="page press">
    <foto></foto>
    <div>
        <div class="heder">
            <div><h3><?=$word['arcnews'];?></h3></div>
            <div><p></p></div>
        </div>
        <a class="back link" href="news" alt="<?=$word['backactual'];?>"></a>
    </div>
        </header>
        <centre>
            <?php if (empty($news)) { ?>
                <p class="h"><?=$word['nonewsarc'];?></p>
            <?php } ?>
            <div class="archive">
                <?php
                    foreach ($news as $item):
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
                            <type><?=$word[$item['type']];?></type>
                            <p><?=$item['title_'.$lang]?></p>
                            <more><a href="news/<?=$item['url']?>"><?=$word['details'];?></a></more>
                        </div>
                <?php endforeach; ?>
            </div>
            <a href="news" class="allnews link" style="width: 240px;"><?=$word['backactual'];?></a>
        </centre>
<style>
    type {position: absolute; top: 20px; right: 15px;}
</style>
