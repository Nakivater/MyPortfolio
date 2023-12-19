<link href="../style_for_index.css" rel="stylesheet">
<h4>Вы действительно хотите удалить {$name}?</h4>
<form action="delete_items.php" method="post" enctype="multipart/form-data">
    <input type="radio" name="del" checked value="yes">Да
    <input type="radio" name="del" value="no">Нет
    <input type="hidden" name="id" value="{$id}">
    <input type="submit" name="send" value="Удалить">
</form>
<div class="myclass">
    <p>Добро пожаловать {$user_name}</p>
    <p><img src="../images/{$user_avatar}" width="50px"></p>
</div>