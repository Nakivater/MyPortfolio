<h4>Редактирование товара {$name}</h4>
<form enctype="multipart/form-data" method="post" action="update_items.php">
    <p>Отредактируйте meta_title</p>
    <textarea name="meta_title">{$meta_title}</textarea><br>
    <p>Отредактируйте meta_keyword</p>
    <textarea name="meta_keyword">{$meta_keyword}</textarea><br>
    <p>Отредактируйте meta_descript</p>
    <textarea name="meta_descript">{$meta_descript}</textarea><br>
    <p>Отредактируйте название товара</p>
<textarea name="name">{$name}</textarea><br>
    <p>Отредактируйте характеристику</p>
<textarea name="har">{$har}</textarea><br>
    <p>Отредактируйте цену</p>
<input type="number" name="price" value="{$price}"><br>
<p>Отредактируйте количество</p>
    <input type="number" name="count" value="{$count}"><br>
    <p>Отредактируйте фото</p><br><img src="../images/{$photo} "width='100px'><br>
    <input type="file" name="newphoto">
    <input type="hidden" name="oldphoto" value="{$photo}">
<select name="id_cat_new">
    {section loop=$cat name=i}
    <option {if $cat[i].id_cat==$id_cat}selected {/if}value="{$cat[i].id_cat}">{$cat[i].name_cat}</option>
    {/section}
</select>
    <input type="hidden" name="id" value="{$id}">
    <input type="submit" name="send" value="Отредактировать">
</form>
<div class="myclass">
    <p>Добро пожаловать {$user_name}</p>
    <p><img src="../images/{$user_avatar}" width="50px"></p>
</div>