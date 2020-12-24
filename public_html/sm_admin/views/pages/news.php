<?php
use SimpleQueryBuilder\Query;

    $data = (new Query($pdo, 'news'))
        ->orderBy('date', 'DESC')
        ->all();
?>

<div class="tableTitleContainer">
    <p class="tableTitle">Управление Новостями [ Пресс-Центр ]</p>
    <a class="addButton" href="news-add">+ Добавить новость</a>
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