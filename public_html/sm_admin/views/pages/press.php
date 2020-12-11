<?php $sql = "SELECT * FROM press ORDER BY id"; $data = getData($sql); ?>
<h1>Управление Пресс-Кит [ МедиаЦентр ]</h1>
<table class="list">
    <thead>
        <tr>
            <td>обложка</td>
            <td>заголовок</td>
            <td>публикация</td>
            <td>действие</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $item): ?>
        <tr>
            <td style="height: 70px; width: 70px; background-image: url(../userfiles/press/<?=$item['cover']?>);"></td>
            <td><?=$item['title_ru']?></td>
            <td style="width: 50px;"><?if($item['public'] == 'no') {echo '<img src="images/public_no.png">';} else {echo '<img src="images/public_yes.png">';}?></td>
            <td>
                <a href="press-edit/<?=$item['id']?>" class="button edit" title="редактировать"></a>
                <a href="press/<?=$item['type']?>/<?=$item['id']?>/delete" class="button del" title="удалить"></a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>