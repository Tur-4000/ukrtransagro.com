<?php
use SimpleQueryBuilder\Query;

$reports = (new Query($pdo, 'reports'))
    ->where('published', true)
    ->orderBy('report_year', 'DESC')
    ->all();
?>

<header class="page">
    <foto></foto>
    <div>
        <div class="heder">
            <div><h3><?=$page['headtitle_'.$lang];?></h3></div>
            <div><p><?=$page['headdecript_'.$lang];?></p></div>
        </div>
        <a href="" class="link tomain"></a>
    </div>
</header>

<centre>
    <?php if(!empty($page['intro_'.$lang])): ?>
        <intro><?=$page['intro_'.$lang];?></intro>
    <?php endif; ?>
    <?php if(!empty($page['text_'.$lang])): ?>
        <div><?=$page['text_'.$lang];?></div>
    <?php endif; ?>
    <div class="reports">
      <p>здесь будут размещаться ссылки на скачивание отчётов</p>
        <?php foreach ($reports as $item): ?>
            <p><?=$item['report_name_' . $lang] ?></p>
        <?php endforeach; ?>
    </div>
</centre>