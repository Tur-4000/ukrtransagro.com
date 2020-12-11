<?php
use SimpleQueryBuilder\Query;

    $table = 'news';
//    $data = pageData($idRow,$table);
    $data = (new Query($pdo, $table))
        ->where('id', $idRow)
        ->fetch();
    $newsId = $data['id'];
//    $sql = "SELECT * FROM newsfoto WHERE news_id='$newsId' ORDER BY num";
//    $dataFoto = getData($sql);
    $dataFoto = (new Query($pdo, 'newsfoto'))
        ->where('news_id', $newsId)
        ->orderBy('num')
        ->all();
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
        <div class="box"><input type="radio" name="public" value="yes" <?php if($data['public'] == 'yes') echo 'checked';?>>Да</div>
        <div class="box"><input type="radio" name="public" value="no" <?php if($data['public'] == 'no') echo 'checked';?>>Нет</div>
        <pre></pre>
        <label>Дата</label><input type="date" name='date' value='<?=$data['date'];?>' style="width: auto;"><pre></pre>
        <label>Тип новости</label><select size="1" name="type" required>
            <option value="<?=$data['type'];?>" selected disabled><?=$word[$data['type']];?></option>
            <option value="news">Новости компании</option>
            <option value="press">О нас в прессе</option>
        </select><pre></pre>
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
        <label>url страницы:</label><input type="text" name='url' value='<?=$data['url'];?>' style="width: 500px;">
        <a href="http://<?=$base;?>/news/<?=$data['url'];?>" target="test" class="testpage" title="окно откроется в футере внизу">Проверка ссылки</a>
        <pre></pre>
        <label>Видео</label><input type="text" name='video' value='<?=$data['video'];?>' placeholder="ссылка на видео с Youtube"><pre></pre>
        <label>Ресурс</label><input type="text" name='source' value='<?=$data['source'];?>' placeholder="название ресурса на который необходимо сослаться"><pre></pre>
        <label>Ресурс url</label><input type="text" name='source_url' value='<?=$data['source_url'];?>' placeholder="адрес ресурса"><pre></pre>
        <input type="file" name="filename"> * файл не более 2мб.! <img class="newsEdit" src="../userfiles/<?=$table;?>/<?=$data['img'];?>" title="текущая обложка"><pre></pre>
        <input type="hidden" name='table' value='<?=$table;?>'>
        <input type="hidden" name='id' value='<?=$data['id'];?>'>
        <input type="hidden" name='oldImg' value='<?=$data['img'];?>'>
        <input type="submit" name="edit" value="сохранить изменения!" style="width: 200px;">
    </form>

    <?php if (!empty($dataFoto)): ?>


        <div class="fotoNews">
            <form action="" method="post">
            <div id="sortContainer">
            <?php
                $q=1;
                foreach ($dataFoto as $itemFoto): ?>
                <div id="<?=$itemFoto['id']?>" class="newsFotos" style="background-image: url(../userfiles/news/newsAlbum/<?=$itemFoto['img'];?>);">
                    <!--<a href="gallery-edit/<?=$itemFoto['id']?>/delete-foto-gallery" class="del" title="удалить"></a>-->
                    <input type="checkbox" name="<?=$itemFoto['id']?>" value="<?=$itemFoto['img']?>" title="выбрать для удаления">
                </div>
                <?php
                    $q++;
                    endforeach;
                ?>
            </div>
            <div style="clear: both;"></div><pre></pre>
            <input type="hidden" name="table" value="newsfoto">
            <input class="del" type="submit" name="delPhotos" value="удалить выбранные" style="width: 200px;">
            <input class="saveOrder" type="button" name="changegallery" table="newsfoto" value="сохранить изменения" style="width: 200px;">
            </form>
        </div>
    <?php endif; ?>
    <form action="" enctype="multipart/form-data" method="post">
        <input type="submit" name="addfotos" value="загрузить фотографии" style="width: 200px;">
        <input type="file" name="filename[]" multiple="multiple"> * файл не более 2мб.!
        <input type="hidden" name='date' value='<?=$data['date'];?>'>
        <input type="hidden" name='table' value='<?=$table;?>'>
        <input type="hidden" name='id' value='<?=$data['id'];?>'>
    </form>
</div>
