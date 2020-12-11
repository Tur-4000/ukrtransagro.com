<div class="work editWindow">
    <form action="" enctype="multipart/form-data" method="post">
        <div class="langButton">
            <div id="ru" class="ru active">РУ</div>
            <div id="ua" class="ua">УА</div>
            <div id="en" class="en">EN</div>
        </div>
        <h2 class="editTitle">Добавление [ Актива ]</h2>
        <label>Публикация:</label>
        <div class="box"><input type="radio" name="public" value="yes">Да</div>
        <div class="box"><input type="radio" name="public" value="no" checked>Нет</div>
        <pre></pre>
        <label>Сайт актива:</label><input type="text" name='link' value='<?=$data['link'];?>' placeholder="http://ссылка на сайт актива"><pre></pre>
        <div id="lang_ru" class="language">
            <label>Заголовок RU</label><input type="text" name='title_ru' value='' placeholder="заголовок (используется в теге TITLE)"><pre></pre>
            <label>Заголовок2 RU</label><input type="text" name='bigtitle_ru' value='' placeholder="полное название компании"><pre></pre>
            <label>Описание RU</label><textarea name="descript_ru" style="width: 715px;" placeholder="описание (используется в теге DESCRIPTION)"></textarea><pre></pre>
            <h3>Первый текст</h3><textarea class="ckeditor" id="editor1" name="first_ru" placeholder="первый текст актива после названия в правой колонке"></textarea><pre></pre>
            <h3>Основной текст в две колонки</h3><textarea class="ckeditor" id="editor1" name="text_ru"></textarea><pre></pre>
            <h3>Абзац стратегия</h3><textarea name="strategy_ru"></textarea><pre></pre>
            <label>Заголовок пунктов</label><input type="text" name='head_ru' value='' placeholder="заголовок пунктов списка под номерами"><pre></pre>
            <label>Пункт 01</label><input type="text" name='item1_ru' value='' placeholder=""><pre></pre>
            <label>Пункт 02</label><input type="text" name='item2_ru' value='' placeholder=""><pre></pre>
            <label>Пункт 03</label><input type="text" name='item3_ru' value='' placeholder=""><pre></pre>
            <label>Пункт 04</label><input type="text" name='item4_ru' value='' placeholder=""><pre></pre>
            <label>Пункт 05</label><input type="text" name='item5_ru' value='' placeholder=""><pre></pre>
            <label>Пункт 06</label><input type="text" name='item6_ru' value='' placeholder=""><pre></pre>
            <label>Пункт 07</label><input type="text" name='item7_ru' value='' placeholder=""><pre></pre>
            <label>Пункт 08</label><input type="text" name='item8_ru' value='' placeholder=""><pre></pre>
        </div>
        <div id="lang_ua" class="language">
            <label>Заголовок UA</label><input type="text" name='title_ua' value='' placeholder="заголовок (используется в теге TITLE)"><pre></pre>
            <label>Заголовок2 UA</label><input type="text" name='bigtitle_ua' value='' placeholder="полное название компании"><pre></pre>
            <label>Описание UA</label><textarea name="descript_ua" style="width: 715px;" placeholder="описание (используется в теге DESCRIPTION)"></textarea><pre></pre>
            <h3>Первый текст</h3><textarea class="ckeditor" id="editor1" name="first_ua" placeholder="первый текст актива после названия в правой колонке"></textarea><pre></pre>
            <h3>Основной текст в две колонки</h3><textarea class="ckeditor" id="editor1" name="text_ua"></textarea><pre></pre>
            <h3>Абзац стратегия</h3><textarea name="strategy_ua"></textarea><pre></pre>
            <label>Заголовок пунктов</label><input type="text" name='head_ua' value='' placeholder="заголовок пунктов списка под номерами"><pre></pre>
            <label>Пункт 01</label><input type="text" name='item1_ua' value='' placeholder=""><pre></pre>
            <label>Пункт 02</label><input type="text" name='item2_ua' value='' placeholder=""><pre></pre>
            <label>Пункт 03</label><input type="text" name='item3_ua' value='' placeholder=""><pre></pre>
            <label>Пункт 04</label><input type="text" name='item4_ua' value='' placeholder=""><pre></pre>
            <label>Пункт 05</label><input type="text" name='item5_ua' value='' placeholder=""><pre></pre>
            <label>Пункт 06</label><input type="text" name='item6_ua' value='' placeholder=""><pre></pre>
            <label>Пункт 07</label><input type="text" name='item7_ua' value='' placeholder=""><pre></pre>
            <label>Пункт 08</label><input type="text" name='item8_ua' value='' placeholder=""><pre></pre>
        </div>
        <div id="lang_en" class="language">
            <label>Заголовок EN</label><input type="text" name='title_en' value='' placeholder="заголовок (используется в теге TITLE)"><pre></pre>
            <label>Заголовок2 EN</label><input type="text" name='bigtitle_en' value='' placeholder="полное название компании"><pre></pre>
            <label>Описание EN</label><textarea name="descript_en" style="width: 715px;" placeholder="описание (используется в теге DESCRIPTION)"></textarea><pre></pre>
            <h3>Первый текст</h3><textarea class="ckeditor" id="editor1" name="first_en" placeholder="первый текст актива после названия в правой колонке"></textarea><pre></pre>
            <h3>Основной текст в две колонки</h3><textarea class="ckeditor" id="editor1" name="text_en"></textarea><pre></pre>
            <h3>Абзац стратегия</h3><textarea name="strategy_en"></textarea><pre></pre>
            <label>Заголовок пунктов</label><input type="text" name='head_en' value='' placeholder="заголовок пунктов списка под номерами"><pre></pre>
            <label>Пункт 01</label><input type="text" name='item1_en' value='' placeholder=""><pre></pre>
            <label>Пункт 02</label><input type="text" name='item2_en' value='' placeholder=""><pre></pre>
            <label>Пункт 03</label><input type="text" name='item3_en' value='' placeholder=""><pre></pre>
            <label>Пункт 04</label><input type="text" name='item4_en' value='' placeholder=""><pre></pre>
            <label>Пункт 05</label><input type="text" name='item5_en' value='' placeholder=""><pre></pre>
            <label>Пункт 06</label><input type="text" name='item6_en' value='' placeholder=""><pre></pre>
            <label>Пункт 07</label><input type="text" name='item7_en' value='' placeholder=""><pre></pre>
            <label>Пункт 08</label><input type="text" name='item8_en' value='' placeholder=""><pre></pre>
        </div>
        <input type="file" name="filename"> * файл не более 2мб.! <pre></pre>
        <input type="hidden" name='table' value='actives'>
        <input type="submit" name="add" value="сохранить">
    </form>

</div>