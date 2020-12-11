<?php
use SimpleQueryBuilder\Query;

    $htmlLang = [
        'ru' => 'ru-RU',
        'ua' => 'ua-UA',
        'en' => 'en-EN'
    ];
?>

<!DOCTYPE html>
<html lang="<?=$htmlLang[$lang]?>">
    <head>
        <base href="https://<?=$base;?>/">
        <title><?=$titlePage;?> : <?=$word['uta'];?></title>
        <meta name="description" content='<?=$descriptPage;?>'/>
        <script> var view = "<?= $view; ?>"; var lang = "<?= $lang; ?>"; </script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Mobile -->
        <meta name="viewport" content="width=1200">
	<meta name="MobileOptimized" content="1200"/>
	<meta name="HandheldFriendly" content="true"/>
        <!-- GooglePlus -->
        <meta itemprop="title" content='<?=$titlePage;?> : <?=$requisites['name_'.$lang];?>'/>
        <meta itemprop="description" content="<?=$descriptPage;?>"/>
<!--        <meta itemprop="image" content="http://--><?//=$base;?><!--/userfiles/news/--><?//=$img;?><!--"/>-->
        <!-- Facebook -->
        <meta property="og:title" content='<?=$titlePage;?> : <?=$requisites['name_'.$lang];?>'/>
        <meta property="og:description" content="<?=$descriptPage;?>"/>
<!--        <meta property="og:image" content="http://--><?//=$base;?><!--/userfiles/news/--><?//=$img;?><!--"/>-->
        <!-- Twiter -->
        <meta name="twitter:title" content='<?=$titlePage;?> : <?=$requisites['name_'.$lang];?>'/>
        <meta name="twitter:description" content="<?=$descriptPage;?>"/>
<!--        <meta name="twitter:image:src" content="http://--><?//=$base;?><!--/userfiles/news/--><?//=$img;?><!--"/>-->
        <!-- Style -->
        <link rel="shortcut icon" href="images/favicon.png" />
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/icons.css">
        <!-- Scripts -->
        <script src="js/jquery-2.1.1.js"></script>
        <script src="js/site.js"></script>
        <!-- <script type="text/javascript" src="js/jquery.smoothscroll.js"></script> -->
        <!-- Verifications -->
        <meta name='yandex-verification' content='5b81a3f9e7f26e2f' />
        <meta name='wmail-verification' content='892de1b978929feafd2bbd32ce327094' />
        <meta name="msvalidate.01" content="2B50BE462670C857F299121ECD21B9BD" />
        <meta name="google-site-verification" content="-jvhBLO0TgKYIVZlPS3Y1bHoZZvugLkkqZlxSNSMKHs" />
    </head>
    <body>
    <div class="content">
        <div id="menu-button" alt="<?=$word['menu'];?>">
            <div class="line-1"></div>
            <div class="line-2"></div>
            <div class="line-3"></div>
        </div>
        <cabinet>
            <a href='client'><?=$word['client'];?></a>
        </cabinet>
        <lang>
            <a lang="ua" href="<?php echo 'ua/'.$link;?>">ua</a>
            <a lang="ru" href="<?php echo $link;?>" class='active'>ru</a>
            <a lang="en" href="<?php echo 'en/'.$link;?>">en</a>
        </lang>
        
        <menu>
            
            <close></close>
            <div></div>
            <ul>
                <li><a href=''><?=$word['main'];?></a></li>
                <li><a href='about'><?=$word['aboutcom'];?></a>
                    <ul>
                        <li><a href="about"><?=$word['about'];?></a></li>
                        <li><a href="partners"><?=$word['partners'];?></a></li>
                        <li><a href="strategy"><?=$word['strategy'];?></a></li>
                        <li><a href="team"><?=$word['team'];?></a></li>
                        <li><a href="docs"><?=$word['docs'];?></a></li>
                      <li><a href="reports"><?=$word['reports'];?></a></li>
                    </ul>
                </li>
                <li><a href='services'><?=$word['services'];?></a>
                    <ul>
                        <li><a href="charact"><?=$word['charact'];?></a></li>
                    </ul>
                </li>
                <li><a href='client'><?=$word['client'];?></a></li>
                <li><a href="news"><?=$word['presspart'];?></a>
                    <ul>
                        <li><a href="news"><?=$word['news'];?></a></li>
                        <li><a href="gallery"><?=$word['gallery'];?></a></li>
                    </ul>
                </li>
                <li><a href='contacts'><?=$word['contacts'];?></a></li>
            </ul>
            <info>
                <logo></logo>
                <p class="h1"><?=$requisites['name_'.$lang];?></p>
                <p><?=$requisites['addr_'.$lang];?></p>
                <p class="tel"><?=$requisites['tel1'];?></p>
                <a class="mail" href="mailto:<?=$requisites['mail'];?>"><?=$requisites['mail'];?></a>
                <noindex><a class="fb" href="<?=$requisites['fb'];?>" target="blank" rel="nofollow"></a></noindex>
            </info>
            <a class="made" href="http://leocraft.com/" target="blank" alt="<?=$word['made'];?>">Made By LeoCRAFT 2016</a>
        </menu>
        
        <?php include 'views/pages/'.$view.'.php'; ?>
        
        <partners>
            <noindex>
                <a href="http://martlet.com.ua/" target="blank" rel="nofollow" style="background-image: url(../images/martlet.png);"></a>
                <a href="http://uta-logistic.com/" target="blank" rel="nofollow" style="background-image: url(../images/uta-logistic.png);"></a>
                <a href="http://ukmig.com.ua/<?=$partnerLang;?>" target="blank" rel="nofollow" style="background-image: url(../images/mig.png);"></a>
                <a href="http://asrz.com.ua/<?=$partnerLang;?>" target="blank" rel="nofollow" style="background-image: url(../images/asrz.png);"></a>
                <a href="http://maritime-logistics.com.ua/" target="blank" rel="nofollow" style="background-image: url(../images/mtl.png);"></a>
                <a href="https://svitagrotrade.com/" target="blank" rel="nofollow" style="background-image: url(../images/SAT_logo.png);"></a>
            </noindex>
        </partners>
        
        <footer>
            <div>
                <logo></logo>
                <a href="contacts" class="title link"><?=$word['form'];?></a>
                <p class="h1"><?=$requisites['name_'.$lang];?></p>
                <p><?=$requisites['addr_'.$lang];?></p>
                <p class="tel"><?=$requisites['tel1'];?></p>
                <a href="mailto:<?=$requisites['mail'];?>"><?=$requisites['mail'];?></a>
            </div>
            <noindex>
                <a class="fb" href="<?=$requisites['fb'];?>" target="blank" rel="nofollow"></a>
            </noindex>
        </footer>
        <map>
            
        </map>
        <mail>
            <form class='form' method='post' autocomplete="off">
                <div data-code="f338" class="dashicons dashicons-businessman"><input type="text" name="name" placeholder="<?=$word['form1'];?>" pattern="[А-Яа-яЁёA-Za-z]{3,30}" required></div>
                <div data-code="f466" class="dashicons dashicons-email-alt"><input type="email" name="mail" placeholder="E-mail" required></div>
                <div data-code="f322" class="dashicons dashicons-portfolio"><input type="text" name="subject" placeholder="<?=$word['form2'];?>" required></div>
                <div data-code="f478" class="dashicons dashicons-text"><textarea name="message" placeholder="<?=$word['form3'];?>" required></textarea></div>
                <div class="sub">
                    <input type="submit" name="send" value="<?=$word['form4'];?>">
                </div>
            </form>
        </mail>
    </div>
    
        <link rel="stylesheet" href="touchTouch/touchTouch.css" />
        <script src="touchTouch/touchTouch.jquery.js"></script>
        <script>
        $(function(){$('#thumbs a').touchTouch();});
        </script>
        <!-- Google Analytics -->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-16734123-5', 'auto');
            ga('send', 'pageview');
        </script>
        <!-- Yandex.Metrika counter -->
        <script type="text/javascript">
            (function (d, w, c) {
                (w[c] = w[c] || []).push(function() {
                    try {
                        w.yaCounter35402115 = new Ya.Metrika({
                            id:35402115,
                            clickmap:true,
                            trackLinks:true,
                            accurateTrackBounce:true,
                            webvisor:true,
                            trackHash:true
                        });
                    } catch(e) { }
                });
                var n = d.getElementsByTagName("script")[0],
                    s = d.createElement("script"),
                    f = function () { n.parentNode.insertBefore(s, n); };
                s.type = "text/javascript";
                s.async = true;
                s.src = "https://mc.yandex.ru/metrika/watch.js";
                if (w.opera == "[object Opera]") {
                    d.addEventListener("DOMContentLoaded", f, false);
                } else { f(); }
            })(document, window, "yandex_metrika_callbacks");
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/35402115" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->
    </body>
</html>
