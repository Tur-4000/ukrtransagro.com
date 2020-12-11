<?php
use SimpleQueryBuilder\Query;

    $idRow = 1;
    $table = 'services';
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
        <h2 class="editTitle">Редактирование [ Перечня услуг ]</h2>
        <div id="lang_ru" class="language">
            <label>Заголовок</label><input type="text" name='title_ru' value='<?=$data['title_ru'];?>' placeholder=""><pre></pre>
            <label>Пункт 1</label><input type="text" name='item_1_ru' value='<?=$data['item_1_ru'];?>' placeholder=""><pre></pre>
            <label>Пункт 2</label><input type="text" name='item_2_ru' value='<?=$data['item_2_ru'];?>' placeholder=""><pre></pre>
            <label>Пункт 3</label><input type="text" name='item_3_ru' value='<?=$data['item_3_ru'];?>' placeholder=""><pre></pre>
            <label>Пункт 4</label><input type="text" name='item_4_ru' value='<?=$data['item_4_ru'];?>' placeholder=""><pre></pre>
            <label>Пункт 5</label><input type="text" name='item_5_ru' value='<?=$data['item_5_ru'];?>' placeholder=""><pre></pre>
            <label>Пункт 6</label><input type="text" name='item_6_ru' value='<?=$data['item_6_ru'];?>' placeholder=""><pre></pre>
            <label>Пункт 7</label><input type="text" name='item_7_ru' value='<?=$data['item_7_ru'];?>' placeholder=""><pre></pre>
            <label>Пункт 8</label><input type="text" name='item_8_ru' value='<?=$data['item_8_ru'];?>' placeholder=""><pre></pre>
        </div>
        <div id="lang_ua" class="language">
            <label>Заголовок</label><input type="text" name='title_ua' value='<?=$data['title_ua'];?>' placeholder=""><pre></pre>
            <label>Пункт 1</label><input type="text" name='item_1_ua' value='<?=$data['item_1_ua'];?>' placeholder=""><pre></pre>
            <label>Пункт 2</label><input type="text" name='item_2_ua' value='<?=$data['item_2_ua'];?>' placeholder=""><pre></pre>
            <label>Пункт 3</label><input type="text" name='item_3_ua' value='<?=$data['item_3_ua'];?>' placeholder=""><pre></pre>
            <label>Пункт 4</label><input type="text" name='item_4_ua' value='<?=$data['item_4_ua'];?>' placeholder=""><pre></pre>
            <label>Пункт 5</label><input type="text" name='item_5_ua' value='<?=$data['item_5_ua'];?>' placeholder=""><pre></pre>
            <label>Пункт 6</label><input type="text" name='item_6_ua' value='<?=$data['item_6_ua'];?>' placeholder=""><pre></pre>
            <label>Пункт 7</label><input type="text" name='item_7_ua' value='<?=$data['item_7_ua'];?>' placeholder=""><pre></pre>
            <label>Пункт 8</label><input type="text" name='item_8_ua' value='<?=$data['item_8_ua'];?>' placeholder=""><pre></pre>
        </div>
        <div id="lang_en" class="language">
            <label>Заголовок</label><input type="text" name='title_en' value='<?=$data['title_en'];?>' placeholder=""><pre></pre>
            <label>Пункт 1</label><input type="text" name='item_1_en' value='<?=$data['item_1_en'];?>' placeholder=""><pre></pre>
            <label>Пункт 2</label><input type="text" name='item_2_en' value='<?=$data['item_2_en'];?>' placeholder=""><pre></pre>
            <label>Пункт 3</label><input type="text" name='item_3_en' value='<?=$data['item_3_en'];?>' placeholder=""><pre></pre>
            <label>Пункт 4</label><input type="text" name='item_4_en' value='<?=$data['item_4_en'];?>' placeholder=""><pre></pre>
            <label>Пункт 5</label><input type="text" name='item_5_en' value='<?=$data['item_5_en'];?>' placeholder=""><pre></pre>
            <label>Пункт 6</label><input type="text" name='item_6_en' value='<?=$data['item_6_en'];?>' placeholder=""><pre></pre>
            <label>Пункт 7</label><input type="text" name='item_7_en' value='<?=$data['item_7_en'];?>' placeholder=""><pre></pre>
            <label>Пункт 8</label><input type="text" name='item_8_en' value='<?=$data['item_8_en'];?>' placeholder=""><pre></pre>
        </div>
        <input type="hidden" name='table' value='<?=$table;?>'>
        <input type="hidden" name='id' value='<?=$idRow;?>'>
        <input type="submit" name="edit" value="сохранить изменения!" style="width: 200px;">
    </form>
</div>