<?php
use SimpleQueryBuilder\Query;

    $table = 'team';
//    $data = pageData($idRow,$table);
    $data = (new Query($pdo, $table))
        ->where('id', $idRow)
        ->fetch();
?>
<div class="work editWindow">
    <form action="" enctype="multipart/form-data" method="post">
        <div class="langButton">
            <div id="ru" class="ru active">РУ</div>
            <div id="ua" class="ua">УА</div>
            <div id="en" class="en">EN</div>
        </div>
        <h2 class="editTitle">Редактирование Нашей команды [ <?=$data['title_ru'];?> ]</h2>
        <label>Публикация:</label>
        <div class="box"><input type="radio" name="public" value="yes" <?php if($data['public'] == 'yes') echo 'checked';?>>Да</div>
        <div class="box"><input type="radio" name="public" value="no" <?php if($data['public'] == 'no') echo 'checked';?>>Нет</div>
        <pre></pre>
        <label>Статус</label><select size="1" name="status">
            <option value="<?=$data['status'];?>" selected disabled><?=$word[$data['status']];?></option>
            <option value="head">Руководитель</option>
            <option value="team">Команда</option>
        </select> * следует обязательно указать статус!<pre></pre>
        <div id="lang_ru" class="language">
            <label>Имя Фамилия</label><input type="text" name='title_ru' value='<?=$data['title_ru'];?>' placeholder=""><pre></pre>
            <label>Сокращенная должность</label><input type="text" name='position_ru' value='<?=$data['position_ru'];?>' placeholder=""><pre></pre>
            <label>Полная должность</label><input type="text" name='bigposition_ru' value='<?=$data['bigposition_ru'];?>' placeholder=""><pre></pre>
            <h3>Занимаемый пост</h3><textarea name="descript_ru"><?=$data['descript_ru'];?></textarea>
            <h3>Общий текст</h3><textarea class="ckeditor" id="editor1" name="text_ru"><?=$data['text_ru'];?></textarea>
            <h3>Образование и прочее</h3><textarea name="fin_ru"><?=$data['fin_ru'];?></textarea><pre></pre>
        </div>
        <div id="lang_ua" class="language">
            <label>Имя Фамилия</label><input type="text" name='title_ua' value='<?=$data['title_ua'];?>' placeholder=""><pre></pre>
            <label>Сокращенная должность</label><input type="text" name='position_ua' value='<?=$data['position_ua'];?>' placeholder=""><pre></pre>
            <label>Полная должность</label><input type="text" name='bigposition_ua' value='<?=$data['bigposition_ua'];?>' placeholder=""><pre></pre>
            <h3>Занимаемый пост</h3><textarea name="descript_ua"><?=$data['descript_ua'];?></textarea><pre></pre>
            <h3>Общий текст</h3><textarea class="ckeditor" id="editor1" name="text_ua"><?=$data['text_ua'];?></textarea><pre></pre>
            <h3>Образование и прочее</h3><textarea name="fin_ua"><?=$data['fin_ua'];?></textarea><pre></pre>
        </div>
        <div id="lang_en" class="language">
            <label>Имя Фамилия</label><input type="text" name='title_en' value='<?=$data['title_en'];?>' placeholder=""><pre></pre>
            <label>Сокращенная должность</label><input type="text" name='position_en' value='<?=$data['position_en'];?>' placeholder=""><pre></pre>
            <label>Полная должность</label><input type="text" name='bigposition_en' value='<?=$data['bigposition_en'];?>' placeholder=""><pre></pre>
            <h3>Занимаемый пост</h3><textarea name="descript_en"><?=$data['descript_en'];?></textarea><pre></pre>
            <h3>Общий текст</h3><textarea class="ckeditor" id="editor1" name="text_en"><?=$data['text_en'];?></textarea><pre></pre>
            <h3>Образование и прочее</h3><textarea name="fin_en"><?=$data['fin_en'];?></textarea><pre></pre>
        </div>
        <input type="file" name="filename"> * файл не более 2мб.! <img class="newsEdit" src="../userfiles/<?=$table;?>/<?=$data['img'];?>" title="текущее фото"><pre></pre>
        <input type="hidden" name='table' value='<?=$table;?>'>
        <input type="hidden" name='id' value='<?=$data['id'];?>'>
        <input type="hidden" name='oldImg' value='<?=$data['img'];?>'>
        <input type="submit" name="edit" value="сохранить изменения!" style="width: 200px;">
    </form>
</div>