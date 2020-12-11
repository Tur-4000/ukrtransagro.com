<?php
use SimpleQueryBuilder\Query;

    $idRow = 1;
    $table = 'requisites';
//    $data = pageData($idRow, $table);
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
        <h2 class="editTitle">Редактирование [ Реквизитов ]</h2>
        <div id="lang_ru" class="language">
            <label>Заголовок RU</label><input type="text" name='name_ru' value='<?=$data['name_ru'];?>' placeholder="Название"><pre></pre>
            <label>Адрес RU</label><input type="text" name='addr_ru' value='<?=$data['addr_ru'];?>' placeholder="Адрес"><pre></pre>
            <label>Описание RU</label><textarea name="descript_ru" style="width: 715px;" placeholder="небольшой текст"><?=$data['descript_ru'];?></textarea><pre></pre>
        </div>
        <div id="lang_ua" class="language">
            <label>Заголовок UA</label><input type="text" name='name_ua' value='<?=$data['name_ua'];?>' placeholder="Название"><pre></pre>
            <label>Адрес UA</label><input type="text" name='addr_ua' value='<?=$data['addr_ua'];?>' placeholder="Адрес"><pre></pre>
            <label>Описание UA</label><textarea name="descript_ua" style="width: 715px;" placeholder="небольшой текст"><?=$data['descript_ua'];?></textarea><pre></pre>
        </div>
        <div id="lang_en" class="language">
            <label>Заголовок EN</label><input type="text" name='name_en' value='<?=$data['name_en'];?>' placeholder="Название"><pre></pre>
            <label>Адрес EN</label><input type="text" name='addr_en' value='<?=$data['addr_en'];?>' placeholder="Адрес"><pre></pre>
            <label>Описание EN</label><textarea name="descript_en" style="width: 715px;" placeholder="небольшой текст"><?=$data['descript_en'];?></textarea><pre></pre>
        </div>
        <label>Телефон:</label><input type="text" name='tel1' value='<?=$data['tel1'];?>' placeholder="Телефон"><pre></pre>
        <label>Email:</label><input type="text" name='mail' value='<?=$data['mail'];?>' placeholder="E-mail"><pre></pre>
        <label>Facebook:</label><input type="text" name='fb' value='<?=$data['fb'];?>' placeholder="url группы"><pre></pre>
        <label>Google+:</label><input type="text" name='g' value='<?=$data['g'];?>' placeholder="url группы"><pre></pre>
        <label>LinkedIn:</label><input type="text" name='in' value='<?=$data['in'];?>' placeholder="url группы"><pre></pre>
        <label>Twiter:</label><input type="text" name='tw' value='<?=$data['tw'];?>' placeholder="url группы"><pre></pre>
        <input type="hidden" name='table' value='<?=$table;?>'>
        <input type="hidden" name='id' value='<?=$data['id'];?>'>
        <input type="submit" name="edit" value="сохранить">
    </form>
</div>