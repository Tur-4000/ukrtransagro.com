<?php $sql = "SELECT * FROM actives ORDER BY id"; $data = getData($sql); ?>
<h1>Управление Активами</h1>
<table class="list">
    <thead>
        <tr>
            <td>лого</td>
            <td>фото</td>
            <td>заголовок</td>
            <td>публикация</td>
            <td>действие</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $item): ?>
        <tr>
            <td style="height: 70px; width: 150px; background-image: url(../userfiles/actives/<?=$item['logo_ru']?>); background-size: 120px;"></td>
            <td style="height: 70px; width: 70px; background-image: url(../userfiles/actives/<?=$item['img']?>);"></td>
            <td><?=$item['title_ru']?></td>
            <td style="width: 50px;"><?if($item['public'] == 'no') {echo '<img src="images/public_no.png">';} else {echo '<img src="images/public_yes.png">';}?></td>
            <td>
                <a href="actives-edit/<?=$item['id']?>" class="button edit" title="редактировать"></a>
                <a href="actives/<?=$item['type']?>/<?=$item['id']?>/delete" class="button del" title="удалить"></a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>