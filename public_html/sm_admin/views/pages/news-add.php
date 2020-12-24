<div class="work editWindow">
    <form action="" enctype="multipart/form-data" method="post">
        <div class="langButton">
            <div id="ru" class="ru active">РУ</div>
            <div id="ua" class="ua">УА</div>
            <div id="en" class="en">EN</div>
        </div>
        <h2 class="editTitle">Добавление новости [ Медиацентр ]</h2>
        <label>Публикация:</label>
        <div class="box"><input type="radio" name="public" value="yes">Да</div>
        <div class="box"><input type="radio" name="public" value="no" checked>Нет</div>
        <pre></pre>
        <label>Дата</label><input type="date" name='date' value='<?=date('Y-m-d');?>' style="width: auto;"><pre></pre>
        <label>Тип новости</label>
        <select size="1" name="type" required>
            <option value="" selected disabled>тип новости</option>
            <option value="news">Новости компании</option>
            <option value="press">О нас в прессе</option>
        </select> * следует обязательно указать тип новости!<pre></pre>
        <div id="lang_ru" class="language">
            <label>Заголовок RU</label><input type="text" name='title_ru' value='' placeholder="заголовок (используется в теге TITLE)"><pre></pre>
            <label>Описание RU</label><textarea name="descript_ru" style="width: 715px;" placeholder="описание (используется в теге DESCRIPTION)"></textarea><pre></pre>
            <textarea class="ckeditor" id="editor1" name="text_ru"></textarea><pre></pre>
        </div>
        <div id="lang_ua" class="language">
            <label>Заголовок UA</label><input type="text" name='title_ua' value='' placeholder="заголовок (используется в теге TITLE)"><pre></pre>
            <label>Описание UA</label><textarea name="descript_ua" style="width: 715px;" placeholder="описание (используется в теге DESCRIPTION)"></textarea><pre></pre>
            <textarea class="ckeditor" id="editor1" name="text_ua"></textarea><pre></pre>
        </div>
        <div id="lang_en" class="language">
            <label>Заголовок EN</label><input type="text" name='title_en' value='' placeholder="заголовок (используется в теге TITLE)"><pre></pre>
            <label>Описание EN</label><textarea name="descript_en" style="width: 715px;" placeholder="описание (используется в теге DESCRIPTION)"></textarea><pre></pre>
            <textarea class="ckeditor" id="editor1" name="text_en"></textarea><pre></pre>
        </div>
        <label>Видео</label><input type="text" name='video' value='' placeholder="ссылка на видео с Youtube"><pre></pre>
        <label>Ресурс</label><input type="text" name='source' value='' placeholder="название ресурса на который необходимо сослаться"><pre></pre>
        <label>Ресурс url</label><input type="text" name='source_url' value='' placeholder="адрес ресурса"><pre></pre>
        <input type="file" name="filename"> * файл не более 2мб.! <pre></pre>
        <input type="hidden" name='table' value='news'>
        <input type="submit" name="add" value="сохранить">
    </form>

</div>