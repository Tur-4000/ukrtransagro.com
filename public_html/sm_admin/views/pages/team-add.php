<div class="work editWindow">
    <form action="" enctype="multipart/form-data" method="post">
        <div class="langButton">
            <div id="ru" class="ru active">РУ</div>
            <div id="ua" class="ua">УА</div>
            <div id="en" class="en">EN</div>
        </div>
        <h2 class="editTitle">Добавление материала в [ Наша команда ]</h2>
        <label>Публикация:</label>
        <div class="box"><input type="radio" name="public" value="yes">Да</div>
        <div class="box"><input type="radio" name="public" value="no" checked>Нет</div>
        <pre></pre>
        <label>Статус</label><select size="1" name="status" required>
            <option value="" selected disabled>укажите статус</option>
            <option value="head">Руководитель</option>
            <option value="team">Команда</option>
        </select> * следует обязательно указать статус!<pre></pre>
        <div id="lang_ru" class="language">
            <label>Имя Фамилия</label><input type="text" name='title_ru' value='' placeholder=""><pre></pre>
            <label>Сокращенная должность</label><input type="text" name='position_ru' value='' placeholder=""><pre></pre>
            <label>Полная должность</label><input type="text" name='bigposition_ru' value='' placeholder=""><pre></pre>
            <h3>Занимаемый пост</h3><textarea name="descript_ru"></textarea>
            <h3>Общий текст</h3><textarea class="ckeditor" id="editor1" name="text_ru"></textarea>
            <h3>Образование и прочее</h3><textarea name="fin_ru"></textarea><pre></pre>
        </div>
        <div id="lang_ua" class="language">
            <label>Имя Фамилия</label><input type="text" name='title_ua' value='' placeholder=""><pre></pre>
            <label>Сокращенная должность</label><input type="text" name='position_ua' value='' placeholder=""><pre></pre>
            <label>Полная должность</label><input type="text" name='bigposition_ua' value='' placeholder=""><pre></pre>
            <h3>Занимаемый пост</h3><textarea name="descript_ua"></textarea><pre></pre>
            <h3>Общий текст</h3><textarea class="ckeditor" id="editor1" name="text_ua"></textarea><pre></pre>
            <h3>Образование и прочее</h3><textarea name="fin_ua"></textarea><pre></pre>
        </div>
        <div id="lang_en" class="language">
            <label>Имя Фамилия</label><input type="text" name='title_en' value='' placeholder=""><pre></pre>
            <label>Сокращенная должность</label><input type="text" name='position_en' value='' placeholder=""><pre></pre>
            <label>Полная должность</label><input type="text" name='bigposition_en' value='' placeholder=""><pre></pre>
            <h3>Занимаемый пост</h3><textarea name="descript_en"></textarea><pre></pre>
            <h3>Общий текст</h3><textarea class="ckeditor" id="editor1" name="text_en"></textarea><pre></pre>
            <h3>Образование и прочее</h3><textarea name="fin_en"></textarea><pre></pre>
        </div>
        <input type="file" name="filename"> * файл не более 2мб.!<pre></pre>
        <input type="hidden" name='table' value='team'>
        <input type="submit" name="add" value="сохранить изменения!" style="width: 200px;">
    </form>
</div>