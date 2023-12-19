
<h4>Управление товарами</h4>
<table border="2">
    <tr>
        <th>№</th>
        <th>Фото</th>
        <th>Название</th>
        <th>Редактировать</th>
        <th>Удалить</th>
    </tr>
    {section loop=$pages_items name=i}

        <tr>
            <th>{$pages_items[i].sum}</th>
            <th><img src="../images/{$pages_items[i].photo}"></th>
            <th>{$pages_items[i].name}</th>
            <th><a href="update_items.php?id={$pages_items[i].id}">Редактировать</a></th>
            <th><a href="delete_items.php?id={$pages_items[i].id}&&name={$pages_items[i].name}">Удалить</a></th>
        </tr>
    {/section}
</table>
<div class="myclass">
    <p>Добро пожаловать {$user_name}</p>
    <p><img src="../images/{$user_avatar}" width="50px"></p>
</div>