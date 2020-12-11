<?php
use SimpleQueryBuilder\Query;

//    $sql = "SELECT * FROM team ORDER BY num";
//    $data = getData($sql);
    $data = (new Query($pdo, 'team'))
        ->orderBy('num')
        ->all();
?>
<h1>Управление разделом [ Наша команда ]</h1>
<form action="" method="post">
    <table class="list">
        <thead>
            <tr>
                <td>фото</td>
                <td>Имя Фамилия</td>
                <td>публикация</td>
                <td>действие</td>
            </tr>
        </thead>

        <tbody id="sortContainer">

                <?php foreach ($data as $item): ?>
                <tr id="<?=$item['id']?>">
                    <td style="height: 70px; width: 70px; background-image: url(../userfiles/team/<?=$item['img']?>);"></td>
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
                        <a href="team-edit/<?=$item['id']?>" class="button edit" title="редактировать"></a>
                        <a href="team/<?=$item['id']?>/delete" class="button del" title="удалить"></a>
                    </td>
                </tr>
                <?php endforeach; ?>
        </tbody>
    </table>
    <div style="clear: both;"></div><pre></pre>
    <input type="hidden" name="table" value="team">
    <input class="saveOrder" type="button" name="changegallery" table="team" value="сохранить порядок" style="width: 200px; padding: 10px; margin-right: 10px;">
    Порядок вывода изменяется простым перетаскиванием элементов.
</form>