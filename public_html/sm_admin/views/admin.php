<!DOCTYPE html>
<html>
    <head>
        <base href="https://<?=$base;?>/sm_admin/">
        <title>Admin Panel SmartMouse 2.0 Made By LeoCRAFT 2015</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="Cache-Control" content="no-cache">
        <meta name="robots" content="noindex">
        <link rel="icon" href="images/logo.gif" />
        <link rel="stylesheet" type="text/css" href="css/adminLeoCraft.css" />
        <script type="text/javascript" src="js/jquery-1.11.3.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.11.4/jquery-ui.js"></script>
        <script type="text/javascript" src="js/admin.js"></script>
        <script type="text/javascript" src="js/jquery.smoothscroll.js"></script>
        <script type="text/javascript" src="editor/ckeditor/ckeditor.js"></script>
    </head>
    <body>
        
        <contentainer>
            <header>
                <h3>CMS "SmartMouse v2.0" Made By LeoCRAFT 2015 - © LeoCRAFT </h3>
                <div>
                    <p>Приветствем: <?=$_SESSION['username'];?></p>
                    <a href="exit">Выйти</a>
                </div>
            </header>
            <div class="headMenu">
                <img src="images/SmartMouse.svg">
            </div>
            <content>
                <div class="left">
                    <ul class="menu">
                        <h1>Управление содержанием</h1>
                        <li><a href="requisites">Реквизиты</a></li>
                        <li class="part"></li>
                        <li><a href="pages">Содержание и блоки страниц</a></li>
                        <li class="part"></li>
                        <li><a href="mission">Миссия - Видение - Ценности</a></li>
                        <li><a href="charact">Характеристики Терминала</a></li>
                        <li><a href="docs">Сертификаты и дипломы</a></li>
                        <li><a href="services_edit">Перечень Услуг</a></li>
                        <li><a href="team">Наша команда</a></li>
                        <li><a href="news">Новости компании</a></li>
                        <li><a href="gallery-edit">Галерея</a></li>
                        <li class="part"></li>
                        <li><a href="users">Администраторы</a></li>
                    </ul>
                    <ul class="menu">
                        <h1>Добавление данных на сайт</h1>
                        <li><a href="news-add">Новость</a></li>
                        <li><a href="team-add">Наша команда</a></li>
                        <li><a href="docs-add">Сертификаты и дипломы</a></li>
                        <li><a href="users-add">Администратор</a></li>
                    </ul>
                </div>
                <div class="right">
                    <?php require_once 'views/pages/'.$view.'.php'; ?>
                </div>
                <div style="clear: both;"></div>
            </content>
            <footer style="height: 500px;">
                <iframe name="test" class="testlink" onload="if(window.Vario!=1){window.Vario=1;}else this.style.display='block'"></iframe>
            </footer>
        </contentainer>
    </body>
</html>
<style>
    .testlink {display: none; position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 10000;}
    .testpage {padding: 7px 10px; background: #fc0; }
</style>