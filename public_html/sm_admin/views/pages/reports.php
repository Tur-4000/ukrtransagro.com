<?php
    use SimpleQueryBuilder\Query;

    $data = (new Query($pdo, 'reports'))
    ->orderBy('report_year', 'DESC')
    ->all();
?>

<div class="tableTitleContainer">
    <p class="tableTitle">Управление разделом [ Регламентная отчётность ]</p>
    <a class="addButton" href="reports-add">+ Добавить отчёт</a>
</div>

<table class="list">
    <thead>
    <tr>
        <td>Название документа</td>
        <td>Год</td>
        <td>публикация</td>
        <td>действие</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($data as $item): ?>
        <tr>
            <td><?=$item['report_name_ru']?></td>
            <td><?=$item['report_year']?></td>
            <td style="width: 50px;">
                <?php
                if($item['published'] == 0) {
                    echo '<img src="images/public_no.png">';
                } else {
                    echo '<img src="images/public_yes.png">';
                }?>
            </td>
            <td>
                <a href="reports-edit/<?=$item['id']?>" class="button edit" title="редактировать"></a>
                <a href="reports/<?=$item['id']?>/delete" class="button del" title="удалить"></a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>