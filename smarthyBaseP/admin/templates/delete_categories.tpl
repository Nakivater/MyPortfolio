<div class="f1">


<h2>Вы действительно хотите удалить категорию {$name_cat}?</h2>
    <form method="post" enctype="multipart/form-data" action="delete_categories.php">
        <input type="radio" name="del" checked value="yes">Да
        <input type="radio" name="del" value="no">Нет
        <input type="hidden" name="id" value="{$id}"><br>
        <input type="submit" name="send" value="Удалить">
    </form>
</div>
<div class="myclass">
    <p>Добро пожаловать {$user_name}</p>
    <p><img src="../images/{$user_avatar}" width="50px"></p>
</div>