<?php
use SimpleQueryBuilder\Query;

    $idRow = 1;
    $table = 'charact';
//    $data = pageData($idRow,$table);
    $data = (new Query($pdo, $table))
        ->where('id', $idRow)
        ->fetch();
?>
<div class="work editWindow">
    <form action="" enctype="multipart/form-data" method="post">
        <h2 class="editTitle">Редактирование [ Характеристик Терминала ]</h2>
        <label>Мощностью по перевалке</label><input type="text" name='char1' value='<?=$data['char1'];?>' placeholder="параметр"><pre></pre>
        <label>Емкость хранения</label><input type="text" name='char2' value='<?=$data['char2'];?>' placeholder="параметр"><pre></pre>
        <label>Длина принимаемых судов</label><input type="text" name='char3' value='<?=$data['char3'];?>' placeholder="параметр"><pre></pre>
        <label>дедвейт принимаемых судов</label><input type="text" name='char4' value='<?=$data['char4'];?>' placeholder="параметр"><pre></pre>
        <label>максимальная осадка у причальной линии</label><input type="text" name='char5' value='<?=$data['char5'];?>' placeholder="параметр"><pre></pre>
        <label>отгрузка на морские суда</label><input type="text" name='char6' value='<?=$data['char6'];?>' placeholder="параметр"><pre></pre>
        <label>приемка культур с автотранспорта</label><input type="text" name='char7' value='<?=$data['char7'];?>' placeholder="параметр"><pre></pre>
        <label>приемка культур с ж/д транспорта</label><input type="text" name='char8' value='<?=$data['char8'];?>' placeholder="параметр"><pre></pre>
        <label>аспирационные потери по зерну</label><input type="text" name='char9' value='<?=$data['char9'];?>' placeholder="параметр"><pre></pre>

        <input type="hidden" name='table' value='<?=$table;?>'>
        <input type="hidden" name='id' value='<?=$idRow;?>'>
        <input type="submit" name="edit" value="сохранить">
    </form>
</div>