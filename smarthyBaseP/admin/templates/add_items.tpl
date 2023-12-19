<form action="add_items.php" method="post" enctype="multipart/form-data">
    <p>Введите title</p>
    <textarea name="meta_title"></textarea>
    <p>Введите ключевое слово</p>
    <textarea name="meta_keyword"></textarea>
    <p>Введите описание</p>
    <textarea name="meta_descript"></textarea><br>
    <input type="text" name="name" placeholder="Введите название товара"><br>
    <input type="text" name="har" placeholder="Введите характеристику"><br>
    <input type="number" name="price" placeholder="Введите цену товара"><br>
    <input type="number" name="count" placeholder="Введите количество товара"><br>
    <input type="file" name="photo"><br>
    <select name="id_cat">
        {section loop=$cat name=i}
            <option value="{$cat[i].id}">{$cat[i].name_cat}</option>
        {/section}
    </select><br>
    <input type="submit" name="send" value="Отправить">
</form>
<div class="myclass">
    <p>Добро пожаловать {$user_name}</p>
    <p><img src="../images/{$user_avatar}" width="50px"></p>
</div>