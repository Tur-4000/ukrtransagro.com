<?php
    use SimpleQueryBuilder\Query;

    $data = (new Query($pdo, 'reports'))
    ->orderBy('report_year', 'DESC')
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
        color: #000;
        background: #fe0;
        text-shadow: 0 3px 10px rgba(0,0,0,0.5);
    }
</style>

<div class="tableTitle">
    <p style="display: block">Управление разделом [ Регламентная отчётность ]</p>
    <a style="display: block" class="addButton" href="reports-add">+ Добавить отчёт</a>
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