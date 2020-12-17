<?php
use SimpleQueryBuilder\Query;

$reports = (new Query($pdo, 'reports'))
    ->where('published', true)
    ->orderBy('report_year', 'DESC')
    ->all();

$reportsByYear = [];
foreach ($reports as $report) {
  $year = $report['report_year'];
  $reportsByYear[$year][] = $report;
}
//echo '<pre>';
//print_r($reportsByYear);
//echo '</pre>';
//
//die();
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
        <?php foreach ($reportsByYear as $year => $reports): ?>
            <div class="yearContainer">
                <span class="yearTitle"><?=$year?></span>
            </div>
            <div class="yearReports">
                <?php foreach ($reports as $report): ?>
                    <div class="report">
                        <div class="reportLink">
                            <a href="../userfiles/reports/<?=$report['report_file_name']?>">
                                <?php echo file_get_contents("images/download-circular-button.svg"); ?>
                            </a>
                        </div>
                        <div class="reportTitle"><?=$report['report_name_' . $lang] ?></div>
                    </div>
                <?php endforeach; ?>
                </div>
        <?php endforeach; ?>
    </div>

</centre>