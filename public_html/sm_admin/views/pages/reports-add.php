<div class="work editWindow">
    <form action="" enctype="multipart/form-data" method="post">
        <div class="langButton">
            <div id="ru" class="ru active">РУ</div>
            <div id="ua" class="ua">УА</div>
            <div id="en" class="en">EN</div>
        </div>
        <h2 class="editTitle">Добавление материала [ Регламентные отчёты ]</h2>
        <label>Публикация:</label>
        <div class="box"><input type="radio" name="published" value=1>Да</div>
        <div class="box"><input type="radio" name="published" value=0 checked>Нет</div>
        <pre></pre>
        <div id="lang_ru" class="language">
            <label>Название документа RU</label>
            <input type="text" name='report_name_ru' value='' placeholder=""><pre></pre>
        </div>
        <div id="lang_ua" class="language">
            <label>Название документа UA</label>
            <input type="text" name='report_name_ua' value='' placeholder=""><pre></pre>
        </div>
        <div id="lang_en" class="language">
            <label>Название документа EN</label>
            <input type="text" name='report_name_en' value='' placeholder=""><pre></pre>
        </div>
        <input type="file" name="filename"> * файл не более 2мб.!<pre></pre>
        <input type="hidden" name='table' value='reports'>
        <input type="submit" name="add" value="сохранить изменения!" style="width: 200px;">
    </form>
</div>