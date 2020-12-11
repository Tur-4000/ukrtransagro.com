<?php
use SimpleQueryBuilder\Query;

//$sql = "SELECT * FROM docs ORDER BY id";
//$data = getData($sql);
$data = (new Query($pdo, 'docs'))
    ->orderBy('id')
    ->all();
?>
<h1>Управление разделом [ Наша команда ]</h1>
<table class="list">
    <thead>
        <tr>
            <td>картинка</td>
            <td>Название документа</td>
            <td>публикация</td>
            <td>действие</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $item): ?>
        <tr>
            <td style="height: 70px; width: 70px; background-image: url(../userfiles/docs/<?=$item['img']?>);"></td>
            <td><?=$item['title_ru']?></td>
            <td style="width: 50px;">
                <?php
                if($item['public'] == 'no') {
                    echo '<img src="images/public_no.png">';
                } else {
                    echo '<img src="images/public_yes.png">';
                }?>
            </td>
            <td>
                <a href="docs-edit/<?=$item['id']?>" class="button edit" title="редактировать"></a>
                <a href="docs/<?=$item['id']?>/delete" class="button del" title="удалить"></a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>