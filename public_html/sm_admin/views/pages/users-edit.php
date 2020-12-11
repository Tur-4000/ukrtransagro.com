<?php
use SimpleQueryBuilder\Query;

    $table = 'users';
//    $data = pageData($idRow,$table);
    $data = (new Query($pdo, $table))
        ->where('id', $idRow)
        ->fetch();
?>
<div class="work editWindow">
    <form action="" enctype="multipart/form-data" method="post">
        <h2 class="editTitle">Редактирование Пользователя [ <?=$data['username'];?> ]</h2>
        <label>Имя</label><input type="text" name='firstname' value='<?=$data['firstname'];?>' placeholder="Имя"><pre></pre>
        <label>Фамилия</label><input type="text" name='lastname' value='<?=$data['lastname'];?>' placeholder="Фамилия"><pre></pre>
        <label>Логин</label><input type="text" name='username' value='<?=$data['username'];?>' placeholder="Логин"><pre></pre>
        <label>Пароль</label><input type="password" name='password' value='<?=$data['password'];?>' placeholder="Пароль"><pre></pre>
        <label>E-mail</label><input type="text" name='email' value='<?=$data['email'];?>' placeholder=""><pre></pre>
        <input type="file" name="filename"> * файл не более 2мб.!
            <img class="newsEdit"
                 <?php if($data['img']): ?>
                     src="upload/users/<?=$data['img']; ?>"
                 <?php else: ?>
                     src="images/avatar.jpg"
                 <?php endif; ?>
                 title="текущая обложка" alt="текущая обложка"><pre></pre>
        <input type="hidden" name='table' value='<?=$table;?>'>
        <input type="hidden" name='id' value='<?=$data['id'];?>'>
        <input type="hidden" name='oldImg' value='<?=$data['img'];?>'>
        <input type="submit" name="edit" value="сохранить изменения!" style="width: 200px;">
    </form>
</div>