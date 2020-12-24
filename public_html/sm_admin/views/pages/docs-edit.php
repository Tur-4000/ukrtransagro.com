<?php
use SimpleQueryBuilder\Query;

    $table = 'docs';

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
        <h2 class="editTitle">Добавление материала [ Сертификаты и дипломы ]</h2>
        <label>Публикация:</label>
        <div class="box"><input type="radio" name="public" value="yes" <?php if($data['public'] == 'yes') echo 'checked';?>>Да</div>
        <div class="box"><input type="radio" name="public" value="no" <?php if($data['public'] == 'no') echo 'checked';?>>Нет</div>
        <pre></pre>
        <div id="lang_ru" class="language">
            <label>Название документа RU</label><input type="text" name='title_ru' value='<?=$data['title_ru'];?>' placeholder=""><pre></pre>
            <label>Описание RU</label><textarea name="descript_ru" style="width: 715px;" placeholder=""><?=$data['descript_ru'];?></textarea><pre></pre>
        </div>
        <div id="lang_ua" class="language">
            <label>Название документа UA</label><input type="text" name='title_ua' value='<?=$data['title_ua'];?>' placeholder=""><pre></pre>
            <label>Описание UA</label><textarea name="descript_ua" style="width: 715px;" placeholder=""><?=$data['descript_ua'];?></textarea><pre></pre>
        </div>
        <div id="lang_en" class="language">
            <label>Название документа EN</label><input type="text" name='title_en' value='<?=$data['title_en'];?>' placeholder=""><pre></pre>
            <label>Описание EN</label><textarea name="descript_en" style="width: 715px;" placeholder=""><?=$data['descript_en'];?></textarea><pre></pre>
        </div>
        <input type="file" name="filename"> * файл не более 2мб.! <img class="newsEdit" src="../userfiles/<?=$table;?>/<?=$data['img'];?>" title="текущее фото"><pre></pre>
        <input type="hidden" name='table' value='<?=$table;?>'>
        <input type="hidden" name='id' value='<?=$data['id'];?>'>
        <input type="hidden" name='oldImg' value='<?=$data['img'];?>'>
        <input type="submit" name="edit" value="сохранить изменения!" style="width: 200px;">
    </form>
</div>