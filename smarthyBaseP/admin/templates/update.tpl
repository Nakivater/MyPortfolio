<h2>Редактирование</h2>
<form action="update.php" method="post" enctype="multipart/form-data">
    <p>Отредактировать meta_title</p>
    <textarea name="meta_title">{$meta_title}</textarea>
    <p>Отредактировать meta_keyword</p>
    <textarea name="meta_keyword">{$meta_keyword}</textarea>
    <p>Отредактировать meta_descript</p>
    <textarea name="meta_descript">{$meta_descript}</textarea>
    <p>Отредактируйте название страницы</p>
    <input type="text" name="title" value="{$title}">
    <p>Отредактируйте контент</p>
    <textarea name="content">{$content}</textarea>
    <input type="hidden" name="id" value="{$id}">
    <input type="submit" name="send" value="Отредактировать">
</form>
<div class="myclass">
    <p>Добро пожаловать {$user_name}</p>
    <p><img src="../images/{$user_avatar}" width="50px"></p>
</div>
