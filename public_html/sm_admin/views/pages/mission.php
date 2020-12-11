<?php
use SimpleQueryBuilder\Query;

    $idRow = 1;
    $table = 'mission';
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
        <h2 class="editTitle">Редактирование [ Миссия - Видение - Ценности ]</h2>
        <div id="lang_ru" class="language">
            <label>Миссия RU</label><input type="text" name='mission_ru' value='<?=$data['mission_ru'];?>' placeholder="заголовок ру"><pre></pre>
            <textarea name="dmission_ru"><?=$data['dmission_ru'];?></textarea><pre></pre>
            <label>Видение RU</label><input type="text" name='vision_ru' value='<?=$data['vision_ru'];?>' placeholder="заголовок ру"><pre></pre>
            <textarea name="dvision_ru"><?=$data['dvision_ru'];?></textarea><pre></pre>
            <label>Ценности RU</label><input type="text" name='value_ru' value='<?=$data['value_ru'];?>' placeholder="заголовок ру"><pre></pre>
            <textarea name="dvalue_ru"><?=$data['dvalue_ru'];?></textarea><pre></pre>
        </div>
        <div id="lang_ua" class="language">
            <label>Миссия UA</label><input type="text" name='mission_ua' value='<?=$data['mission_ua'];?>' placeholder="заголовок ру"><pre></pre>
            <textarea name="dmission_ua"><?=$data['dmission_ua'];?></textarea><pre></pre>
            <label>Видение UA</label><input type="text" name='vision_ua' value='<?=$data['vision_ua'];?>' placeholder="заголовок ру"><pre></pre>
            <textarea name="dvision_ua"><?=$data['dvision_ua'];?></textarea><pre></pre>
            <label>Ценности UA</label><input type="text" name='value_ua' value='<?=$data['value_ua'];?>' placeholder="заголовок ру"><pre></pre>
            <textarea name="dvalue_ua"><?=$data['dvalue_ua'];?></textarea><pre></pre>
        </div>
        <div id="lang_en" class="language">
            <label>Миссия EN</label><input type="text" name='mission_en' value='<?=$data['mission_en'];?>' placeholder="заголовок ру"><pre></pre>
            <textarea name="dmission_en"><?=$data['dmission_en'];?></textarea><pre></pre>
            <label>Видение EN</label><input type="text" name='vision_en' value='<?=$data['vision_en'];?>' placeholder="заголовок ру"><pre></pre>
            <textarea name="dvision_en"><?=$data['dvision_en'];?></textarea><pre></pre>
            <label>Ценности EN</label><input type="text" name='value_en' value='<?=$data['value_en'];?>' placeholder="заголовок ру"><pre></pre>
            <textarea name="dvalue_en"><?=$data['dvalue_en'];?></textarea><pre></pre>
        </div>
        <input type="hidden" name='table' value='<?=$table;?>'>
        <input type="hidden" name='id' value='<?=$idRow;?>'>
        <input type="submit" name="edit" value="сохранить">
    </form>
</div>