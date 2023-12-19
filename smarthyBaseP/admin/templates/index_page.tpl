<link rel="stylesheet" href="../style_for_index.css">
<h2>Редактирование страниц</h2>
<table border="2px">
    <tr>
        <th>#</th>
        <th>Название</th>
        <th>Редактировать</th>
    </tr>
{section loop=$pages name=i}
    <tr>
        <td>{$pages[i].id}</td>
        <td>{$pages[i].name}</td>
        <td><a href="update.php?id={$pages[i].id}">Редактирование</a></td>
    </tr>
{/section}
</table>
    <div class="myclass">
            <p>Добро пожаловать {$user_name}!</p>
                <p><img src="../images/{$user_avatar}" width="50px"></p>
    </div>
