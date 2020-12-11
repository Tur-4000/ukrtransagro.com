<header class="page client">
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
    <div class="client">
        <form>
            <span><?=$word['form7'];?></span>
            <input type="text" name="name" placeholder="<?=$word['form1'];?>" pattern="[А-Яа-яЁёA-Za-z]{3,30}" required>
            <input type="password" name="pass" placeholder="<?=$word['form5'];?>" pattern="[А-Яа-яЁёA-Za-z]{3,30}" required>
            <input type="submit" name="send" value="<?=$word['form6'];?>">
        </form>
        <intro><?=$page['intro_'.$lang];?></intro>
        <?=$page['text_'.$lang];?>
    </div>
</centre>
