<?php
use SimpleQueryBuilder\Query;

    $data = (new Query($pdo, 'news'))
        ->orderBy('date', 'DESC')
        ->all();
?>
<style>
    .tableTitle {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
        padding: 3px 15px;
        border: 1px solid #999;
        background: linear-gradient(#aaa,#999);
        text-shadow: 0 0 20px rgba(0,0,0,0.5);
        color: #eee;
        font-size: 20px
    }
    .addButton {
        border: #FFCC00 solid 1px;
        border-radius: 3px;
        padding: 6px;
        color: #FFCC00;
    }
    .addButton:hover {
        /*background-color: #FFCC00;*/
        color: #000;
        background: #fe0;
        text-shadow: 0 3px 10px rgba(0,0,0,0.5);
    }
</style>

<div class="tableTitle">
    <p style="display: block">Управление Новостями [ Пресс-Центр ]</p>
    <a style="display: block" class="addButton" href="news-add">+ Добавить новость</a>
</div>

<table class="list">
    <thead>
        <tr>
            <td>дата</td>
            <td>тип</td>
            <td>фото</td>
            <td>заголовок</td>
<!--            <td>просмотры</td>-->
            <td>публикация</td>
            <td>действие</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $item): ?>
        <tr>
            <td><?=$item['date']?></td>
            <td><?=$word[$item['type']]?></td>
            <td style="height: 70px; width: 70px; background-image: url(../userfiles/news/<?=($item['img']) ? $item['img'] : 'cover.png'?>);">
            </td>
            <td><?=$item['title_ru']?></td>
<!--            <td>--><?//=$item['views']?><!--</td>-->
            <td style="width: 50px;">
                <?php if($item['public'] == 'no'): ?>
                    <img src="images/public_no.png" alt="no">
                <?php else: ?>
                    <img src="images/public_yes.png" alt="yes">
                <?php endif; ?>
            </td>
            <td>
                <a href="news-edit/<?=$item['id']?>" class="button edit" title="редактировать"></a>
                <a href="news/<?=$item['type']?>/<?=$item['id']?>/delete" class="button del" title="удалить"></a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>