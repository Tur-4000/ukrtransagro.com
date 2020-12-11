<?php
use SimpleQueryBuilder\Query;
use function Uta\Helpers\formatDate;

//    $sql = "SELECT * FROM news WHERE url='$cat'";
//    $item = pageData($sql);
    $item = (new Query($pdo, 'news'))
        ->select(["id", "url", "date", "type", "video", "img", "source_url", "source", "text_$lang", "title_$lang", "descript_$lang"])
        ->where('url', $cat)
        ->fetch();

    $newsId = $item['id'];
//$sql = "SELECT * FROM newsfoto WHERE news_id='$newsId' ORDER BY num";
//$fotos = getData($sql);
    $fotos = (new Query($pdo, 'newsfoto'))
        ->where('news_id', $newsId)
        ->orderBy('num')
        ->all();

    $localizedDate = formatDate($item['date'], $word);

    if (empty($item['img'])) {
        $img = 'cover.png';
    } else {
        $img = $item['img'];
    }
?>
<header class="page news">
    <foto></foto>
    <div>
        <div class="heder">
            <div><h3><?=$word[$item['type']];?></h3></div>
            <div><p><?=$localizedDate;?></p></div>
        </div>
        <a class="back" onclick="history.back()" alt="<?=$word['back'];?>"></a>
    </div>
</header>
<centre>
    <div class="newsview">
        <img src="userfiles/news/<?=$item['img'];?>">
        <div class="foto" style="background-image: url(userfiles/news/<?=$img;?>);">
            <?php
                if(!empty($item['video'])): ?>
                    <div class="play" alt="<?=$word['play'];?>"></div>
                    <div class="stop" alt="<?=$word['stop'];?>"></div>
                    <div class="video">
                        <iframe width="100%" height="100%" src="<?=$item['video'];?>" frameborder="0" allowfullscreen></iframe>
                    </div>
            <?php endif; ?>
        </div>

        <div class="title">
            <type><?=$word[$item['type']];?></type>
            <?php
                if (!empty($item['source_url'])): ?>
                    <div class="source">
                        <p><?=$word['source'];?>
                            <noindex><a href="<?=$item['source_url'];?>" target="blank" rel="nofollow"><?=$item['source'];?></a></noindex>
                        </p>
                    </div>
            <?php endif; ?>

            <h1><?=$item['title_'.$lang];?></h1>
            <p><?=$item['descript_'.$lang];?></p>
            <date><?=$localizedDate;?></date>

            <social>
                <script type="text/javascript">(function() {
                    if (window.pluso)if (typeof window.pluso.start == "function") return;
                    if (window.ifpluso==undefined) { window.ifpluso = 1;
                      var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
                      s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
                      s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
                      var h=d[g]('body')[0];
                      h.appendChild(s);
                    }})();</script>
                <div class="pluso" data-background="transparent" data-options="small,square,line,horizontal,nocounter,theme=06" data-services="facebook,twitter,google,email,print"></div>
            </social>
        </div>

        <?php
            if (!empty($fotos)): ?>
                <div class="newsGallery" id="thumbs">
                    <?php foreach ($fotos as $foto): ?>
                        <a href="userfiles/news/newsAlbum/<?=$foto['img'];?>" style="background-image: url(userfiles/news/newsAlbum/<?=$foto['img'];?>);"></a>
                    <?php endforeach; ?>
                </div>
        <?php endif; ?>

        <div class="text">
            <?=$item['text_'.$lang];?>
        </div>
    </div>
</centre>