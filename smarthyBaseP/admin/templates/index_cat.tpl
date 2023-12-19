<link href="style_for_index.css" rel="stylesheet">
<h2>Форматирование категорий</h2>
<table border="2">
    <tr>
    <th>№</th>
    <th>Название</th>
    <th>Редактировать</th>
    <th>Удалить</th>
    </tr>
        {section loop=$pages_cat name=i}
    <tr>
        <td>{$pages_cat[i].id}</td>
        <td>{$pages_cat[i].name_cat}</td>
        <td><a href="update_categories.php?id={$pages_cat[i].id}">Редактировать</a></td>
        <td><a href="delete_categories.php?id={$pages_cat[i].id}&&name_cat={$pages_cat[i].name_cat}">Удалить</a></td>
    </tr>
{/section}
</table>
<div class="myclass">
<p>Добро пожаловать {$user_name}</p>
    <p><img src="../images/{$user_avatar}" width="50px"></p>
</div>