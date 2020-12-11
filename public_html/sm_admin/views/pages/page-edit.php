<?php
use SimpleQueryBuilder\Query;

    $table = 'pages';
//    $data = pageData($idRow,$table);
    $data = (new Query($pdo, $table))
        ->where('id', $idRow)
        ->fetch();
?>
<div class="work editWindow">
    <form action="" method="post">
        <div class="langButton">
            <div id="ru" class="ru active">РУ</div>
            <div id="ua" class="ua">УА</div>
            <div id="en" class="en">EN</div>
        </div>
        <h2 class="editTitle">Редактирование содержания cтраницы [ <?=$data['menu_ru'];?> ]</h2>
        <div id="lang_ru" class="language">
            <label>Title RU</label><input type="text" name='title_ru' value='<?=$data['title_ru'];?>' placeholder="заголовок (используется в теге TITLE)"><pre></pre>
            <label>Description RU</label><textarea name="descript_ru" style="width: 715px;" placeholder="описание (используется в теге DESCRIPTION)"><?=$data['descript_ru'];?></textarea><pre></pre>
            <label>Заголовок RU</label><input type="text" name='headtitle_ru' value='<?=$data['headtitle_ru'];?>' placeholder="заголовок (используется в шапке)"><pre></pre>
            <label>Описание RU</label><textarea name="headdecript_ru" style="width: 715px;" placeholder="описание (используется в шапке)"><?=$data['headdecript_ru'];?></textarea><pre></pre>
            <label>Интро RU</label><textarea name="intro_ru" style="width: 715px;" placeholder="Интро (используется для крупного текста)"><?=$data['intro_ru'];?></textarea><pre></pre>
            <textarea class="ckeditor" id="editor1" style="height: 500px;" name="text_ru"><?=$data['text_ru'];?></textarea><pre></pre>
        </div>
        <div id="lang_ua" class="language">
            <label>Title UA</label><input type="text" name='title_ua' value='<?=$data['title_ua'];?>' placeholder="заголовок (используется в теге TITLE)"><pre></pre>
            <label>Description UA</label><textarea name="descript_ua" style="width: 715px;" placeholder="описание (используется в теге DESCRIPTION)"><?=$data['descript_ua'];?></textarea><pre></pre>
            <label>Заголовок UA</label><input type="text" name='headtitle_ua' value='<?=$data['headtitle_ua'];?>' placeholder="заголовок (используется в шапке)"><pre></pre>
            <label>Описание UA</label><textarea name="headdecript_ua" style="width: 715px;" placeholder="описание (используется в шапке)"><?=$data['headdecript_ua'];?></textarea><pre></pre>
            <label>Интро UA</label><textarea name="intro_ua" style="width: 715px;" placeholder="Интро (используется для крупного текста)"><?=$data['intro_ua'];?></textarea><pre></pre>
            <textarea class="ckeditor" id="editor1" style="height: 500px;" name="text_ua"><?=$data['text_ua'];?></textarea><pre></pre>
        </div>
        <div id="lang_en" class="language">
            <label>Title EN</label><input type="text" name='title_en' value='<?=$data['title_en'];?>' placeholder="заголовок (используется в теге TITLE)"><pre></pre>
            <label>Description EN</label><textarea name="descript_en" style="width: 715px;" placeholder="описание (используется в теге DESCRIPTION)"><?=$data['descript_en'];?></textarea><pre></pre>
            <label>Заголовок EN</label><input type="text" name='headtitle_en' value='<?=$data['headtitle_en'];?>' placeholder="заголовок (используется в шапке)"><pre></pre>
            <label>Описание EN</label><textarea name="headdecript_en" style="width: 715px;" placeholder="описание (используется в шапке)"><?=$data['headdecript_en'];?></textarea><pre></pre>
            <label>Интро EN</label><textarea name="intro_en" style="width: 715px;" placeholder="Интро (используется для крупного текста)"><?=$data['intro_en'];?></textarea><pre></pre>
            <textarea class="ckeditor" id="editor1" style="height: 500px;" name="text_en"><?=$data['text_en'];?></textarea><pre></pre>
        </div>
        <?php if(!empty($data['material'])) {?>
            <label>url:</label><input type="text" name='material' value='<?=$data['material'];?>' style="width: 500px;"><pre></pre>
        <?php } ?>
        <input type="hidden" name='table' value='<?=$table;?>'>
        <input type="hidden" name='id' value='<?=$data['id'];?>'>
        <input type="submit" name="edit" value="сохранить">
    </form>
</div>