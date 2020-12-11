<?php $table = 'actives'; $data = pageData($idRow,$table); ?>
<div class="work editWindow">
    <form action="" enctype="multipart/form-data" method="post">
        <div class="langButton">
            <div id="ru" class="ru active">РУ</div>
            <div id="ua" class="ua">УА</div>
            <div id="en" class="en">EN</div>
        </div>
        <h2 class="editTitle">Редактирование [ <?=$data['title_ru'];?> ]</h2>
        <label>Публикация:</label>
        <div class="box"><input type="radio" name="public" value="yes" <?if($data['public'] == 'yes') echo 'checked';?>>Да</div>
        <div class="box"><input type="radio" name="public" value="no" <?if($data['public'] == 'no') echo 'checked';?>>Нет</div>
        <pre></pre>
        <label>Сайт актива:</label><input type="text" name='link' value='<?=$data['link'];?>' placeholder="http://ссылка на сайт актива"><pre></pre>
        <div id="lang_ru" class="language">
            <label>Заголовок RU</label><input type="text" name='title_ru' value='<?=$data['title_ru'];?>' placeholder="заголовок (используется в теге TITLE)"><pre></pre>
            <label>Заголовок2 RU</label><input type="text" name='bigtitle_ru' value='<?=$data['bigtitle_ru'];?>' placeholder="полное название компании"><pre></pre>
            <label>Описание RU</label><textarea name="descript_ru" style="width: 715px;" placeholder="описание (используется в теге DESCRIPTION)"><?=$data['descript_ru'];?></textarea><pre></pre>
            <h3>Первый текст</h3><textarea class="ckeditor" id="editor1" name="first_ru" placeholder="первый текст актива после названия в правой колонке"><?=$data['first_ru'];?></textarea><pre></pre>
            <h3>Основной текст в две колонки</h3><textarea class="ckeditor" id="editor1" name="text_ru"><?=$data['text_ru'];?></textarea><pre></pre>
            <h3>Абзац стратегия</h3><textarea name="strategy_ru"><?=$data['strategy_ru'];?></textarea><pre></pre>
            <label>Заголовок пунктов</label><input type="text" name='head_ru' value='<?=$data['head_ru'];?>' placeholder="заголовок пунктов списка под номерами"><pre></pre>
            <label>Пункт 01</label><input type="text" name='item1_ru' value='<?=$data['item1_ru'];?>' placeholder=""><pre></pre>
            <label>Пункт 02</label><input type="text" name='item2_ru' value='<?=$data['item2_ru'];?>' placeholder=""><pre></pre>
            <label>Пункт 03</label><input type="text" name='item3_ru' value='<?=$data['item3_ru'];?>' placeholder=""><pre></pre>
            <label>Пункт 04</label><input type="text" name='item4_ru' value='<?=$data['item4_ru'];?>' placeholder=""><pre></pre>
            <label>Пункт 05</label><input type="text" name='item5_ru' value='<?=$data['item5_ru'];?>' placeholder=""><pre></pre>
            <label>Пункт 06</label><input type="text" name='item6_ru' value='<?=$data['item6_ru'];?>' placeholder=""><pre></pre>
            <label>Пункт 07</label><input type="text" name='item7_ru' value='<?=$data['item7_ru'];?>' placeholder=""><pre></pre>
            <label>Пункт 08</label><input type="text" name='item8_ru' value='<?=$data['item8_ru'];?>' placeholder=""><pre></pre>
        </div>
        <div id="lang_ua" class="language">
            <label>Заголовок UA</label><input type="text" name='title_ua' value='<?=$data['title_ua'];?>' placeholder="заголовок (используется в теге TITLE)"><pre></pre>
            <label>Заголовок2 UA</label><input type="text" name='bigtitle_ua' value='<?=$data['bigtitle_ua'];?>' placeholder="полное название компании"><pre></pre>
            <label>Описание UA</label><textarea name="descript_ua" style="width: 715px;" placeholder="описание (используется в теге DESCRIPTION)"><?=$data['descript_ua'];?></textarea><pre></pre>
            <h3>Первый текст</h3><textarea class="ckeditor" id="editor1" name="first_ua" placeholder="первый текст актива после названия в правой колонке"><?=$data['first_ua'];?></textarea><pre></pre>
            <h3>Основной текст в две колонки</h3><textarea class="ckeditor" id="editor1" name="text_ua"><?=$data['text_ua'];?></textarea><pre></pre>
            <h3>Абзац стратегия</h3><textarea name="strategy_ua"><?=$data['strategy_ua'];?></textarea><pre></pre>
            <label>Заголовок пунктов</label><input type="text" name='head_ua' value='<?=$data['head_ua'];?>' placeholder="заголовок пунктов списка под номерами"><pre></pre>
            <label>Пункт 01</label><input type="text" name='item1_ua' value='<?=$data['item1_ua'];?>' placeholder=""><pre></pre>
            <label>Пункт 02</label><input type="text" name='item2_ua' value='<?=$data['item2_ua'];?>' placeholder=""><pre></pre>
            <label>Пункт 03</label><input type="text" name='item3_ua' value='<?=$data['item3_ua'];?>' placeholder=""><pre></pre>
            <label>Пункт 04</label><input type="text" name='item4_ua' value='<?=$data['item4_ua'];?>' placeholder=""><pre></pre>
            <label>Пункт 05</label><input type="text" name='item5_ua' value='<?=$data['item5_ua'];?>' placeholder=""><pre></pre>
            <label>Пункт 06</label><input type="text" name='item6_ua' value='<?=$data['item6_ua'];?>' placeholder=""><pre></pre>
            <label>Пункт 07</label><input type="text" name='item7_ua' value='<?=$data['item7_ua'];?>' placeholder=""><pre></pre>
            <label>Пункт 08</label><input type="text" name='item8_ua' value='<?=$data['item8_ua'];?>' placeholder=""><pre></pre>
        </div>
        <div id="lang_en" class="language">
            <label>Заголовок EN</label><input type="text" name='title_en' value='<?=$data['title_en'];?>' placeholder="заголовок (используется в теге TITLE)"><pre></pre>
            <label>Заголовок2 EN</label><input type="text" name='bigtitle_en' value='<?=$data['bigtitle_en'];?>' placeholder="полное название компании"><pre></pre>
            <label>Описание EN</label><textarea name="descript_en" style="width: 715px;" placeholder="описание (используется в теге DESCRIPTION)"><?=$data['descript_en'];?></textarea><pre></pre>
            <h3>Первый текст</h3><textarea class="ckeditor" id="editor1" name="first_en" placeholder="первый текст актива после названия в правой колонке"><?=$data['first_en'];?></textarea><pre></pre>
            <h3>Основной текст в две колонки</h3><textarea class="ckeditor" id="editor1" name="text_en"><?=$data['text_en'];?></textarea><pre></pre>
            <h3>Абзац стратегия</h3><textarea name="strategy_en"><?=$data['strategy_en'];?></textarea><pre></pre>
            <label>Заголовок пунктов</label><input type="text" name='head_en' value='<?=$data['head_en'];?>' placeholder="заголовок пунктов списка под номерами"><pre></pre>
            <label>Пункт 01</label><input type="text" name='item1_en' value='<?=$data['item1_en'];?>' placeholder=""><pre></pre>
            <label>Пункт 02</label><input type="text" name='item2_en' value='<?=$data['item2_en'];?>' placeholder=""><pre></pre>
            <label>Пункт 03</label><input type="text" name='item3_en' value='<?=$data['item3_en'];?>' placeholder=""><pre></pre>
            <label>Пункт 04</label><input type="text" name='item4_en' value='<?=$data['item4_en'];?>' placeholder=""><pre></pre>
            <label>Пункт 05</label><input type="text" name='item5_en' value='<?=$data['item5_en'];?>' placeholder=""><pre></pre>
            <label>Пункт 06</label><input type="text" name='item6_en' value='<?=$data['item6_en'];?>' placeholder=""><pre></pre>
            <label>Пункт 07</label><input type="text" name='item7_en' value='<?=$data['item7_en'];?>' placeholder=""><pre></pre>
            <label>Пункт 08</label><input type="text" name='item8_en' value='<?=$data['item8_en'];?>' placeholder=""><pre></pre>
        </div>
        <label>URL:</label><input type="text" name='url' value='<?=$data['url'];?>'> <pre></pre>
        <input type="file" name="filename"> * файл не более 2мб.! <img class="newsEdit" src="../userfiles/<?=$table;?>/<?=$data['img'];?>" title="текущее фото"><pre></pre>
        <input type="hidden" name='table' value='actives'>
        <input type="hidden" name='id' value='<?=$data['id'];?>'>
        <input type="submit" name="edit" value="сохранить">
    </form>

</div>