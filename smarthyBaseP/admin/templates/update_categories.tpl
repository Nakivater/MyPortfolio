<h1>Отредактируйте категорию</h1>
<form action="update_categories.php" method="post" enctype="multipart/form-data">
    <textarea name="name_cat">{$name_cat}</textarea>
    <input type="hidden" name="id" value="{$id}">
    <input type="submit" name="send" value="Отредактировать">
</form>
<div class="myclass">
    <p>Добро пожаловать {$user_name}</p>
    <p><img src="../images/{$user_avatar}" width="50px"></p>
</div>