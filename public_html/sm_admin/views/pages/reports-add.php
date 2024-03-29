<div class="work editWindow">
    <form action="" enctype="multipart/form-data" method="post">
        <div class="langButton">
            <div id="ru" class="ru active">РУ</div>
            <div id="ua" class="ua">УА</div>
            <div id="en" class="en">EN</div>
        </div>
        <h2 class="editTitle">Добавление материала [ Регламентные отчёты ]</h2>
        <label>Публикация:</label>
        <div class="box"><input type="radio" name="published" value=1>Да</div>
        <div class="box"><input type="radio" name="published" value=0 checked>Нет</div>
        <pre></pre>

      <label for="report_year">Отчетный год *</label>
      <input type="number" id="report_year" name="report_year" placeholder="необходимо ввести год в виде 2019" required>

        <div id="lang_ru" class="language">
            <label>Название документа RU *</label>
            <input type="text" name='report_name_ru' value='' placeholder="" required><pre></pre>
        </div>
        <div id="lang_ua" class="language">
            <label>Название документа UA *</label>
            <input type="text" name='report_name_ua' value='' placeholder="" required><pre></pre>
        </div>
        <div id="lang_en" class="language">
            <label>Название документа EN</label>
            <input type="text" name='report_name_en' value='' placeholder=""><pre></pre>
        </div>
        <input id="reportFileInput" type="file" name="filename" accept="application/pdf" required> * файл не более 30мб. в формате pdf!<pre></pre>
        <input type="hidden" name='table' value='reports'>
        <input type="submit" name="add" value="сохранить изменения!" style="width: 200px;">
    </form>
</div>

<script type="text/javascript" src="js/reportsFileSizeAlert.js"></script>