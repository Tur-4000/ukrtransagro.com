<div class="work editWindow">
    <form action="" enctype="multipart/form-data" method="post">
        <div class="langButton">
            <div id="ru" class="ru active">РУ</div>
            <div id="ua" class="ua">УА</div>
            <div id="en" class="en">EN</div>
        </div>
        <h2 class="editTitle">Добавление материала [ Сертификаты и дипломы ]</h2>
        <label>Публикация:</label>
        <div class="box"><input type="radio" name="public" value="yes">Да</div>
        <div class="box"><input type="radio" name="public" value="no" checked>Нет</div>
        <pre></pre>
        <div id="lang_ru" class="language">
            <label>Название документа RU</label><input type="text" name='title_ru' value='' placeholder=""><pre></pre>
            <label>Описание RU</label><textarea name="descript_ru" style="width: 715px;" placeholder=""></textarea><pre></pre>
        </div>
        <div id="lang_ua" class="language">
            <label>Название документа UA</label><input type="text" name='title_ua' value='' placeholder=""><pre></pre>
            <label>Описание UA</label><textarea name="descript_ua" style="width: 715px;" placeholder=""></textarea><pre></pre>
        </div>
        <div id="lang_en" class="language">
            <label>Название документа EN</label><input type="text" name='title_en' value='' placeholder=""><pre></pre>
            <label>Описание EN</label><textarea name="descript_en" style="width: 715px;" placeholder=""></textarea><pre></pre>
        </div>
        <input type="file" name="filename"> * файл не более 2мб.!<pre></pre>
        <input type="hidden" name='table' value='docs'>
        <input type="submit" name="add" value="сохранить изменения!" style="width: 200px;">
    </form>
</div>