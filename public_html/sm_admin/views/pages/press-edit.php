<?php
    $table = 'press';
    $data = pageData($idRow,$table);
?>
<div class="work editWindow">
    <form action="" enctype="multipart/form-data" method="post">
        <div class="langButton">
            <div id="ru" class="ru active">РУ</div>
            <div id="ua" class="ua">УА</div>
            <div id="en" class="en">EN</div>
        </div>
        <h2 class="editTitle">Редактирование новости [ <?=$data['title_ru'];?> ]</h2>
        <label>Публикация:</label>
        <div class="box"><input type="radio" name="public" value="yes" <?if($data['public'] == 'yes') echo 'checked';?>>Да</div>
        <div class="box"><input type="radio" name="public" value="no" <?if($data['public'] == 'no') echo 'checked';?>>Нет</div>
        <pre></pre>
        <div id="lang_ru" class="language">
            <label>Заголовок RU</label><input type="text" name='title_ru' value='<?=$data['title_ru'];?>' placeholder="заголовок ру"><pre></pre>
            <label>Описание RU</label><textarea name="descript_ru" style="width: 715px;"><?=$data['descript_ru'];?></textarea><pre></pre>
            <textarea class="ckeditor" id="editor1" name="text_ru"><?=$data['text_ru'];?></textarea><pre></pre>
        </div>
        <div id="lang_ua" class="language">
            <label>Заголовок UA</label><input type="text" name='title_ua' value='<?=$data['title_ua'];?>' placeholder="заголовок уа"><pre></pre>
            <label>Описание UA</label><textarea name="descript_ua" style="width: 715px;"><?=$data['descript_ua'];?></textarea><pre></pre>
            <textarea class="ckeditor" id="editor1" name="text_ua"><?=$data['text_ua'];?></textarea><pre></pre>
        </div>
        <div id="lang_en" class="language">
            <label>Заголовок EN</label><input type="text" name='title_en' value='<?=$data['title_en'];?>' placeholder="заголовок уа"><pre></pre>
            <label>Описание EN</label><textarea name="descript_en" style="width: 715px;"><?=$data['descript_en'];?></textarea><pre></pre>
            <textarea class="ckeditor" id="editor1" name="text_en"><?=$data['text_en'];?></textarea><pre></pre>
        </div>
        <label>url:</label><input type="text" name='url' value='<?=$data['url'];?>' style="width: 500px;"><pre></pre>
        <input type="hidden" name='table' value='<?=$table;?>'>
        <input type="hidden" name='id' value='<?=$data['id'];?>'>
        <input type="hidden" name='oldImg' value='<?=$data['img'];?>'>
        <input type="submit" name="edit" value="сохранить изменения!" style="width: 200px;">
    </form>
</div>