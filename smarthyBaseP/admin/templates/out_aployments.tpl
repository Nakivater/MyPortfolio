<p>Полный вывод сотрудников</p>
<table border="'2">
<tr>
    <td>№</td>
    <td>Аватар</td>
    <td>ФИО</td>
    <td>Логин</td>
</tr>
{section loop=$pages_out_aployments name=i}
    <tr>
        <th>{$pages_out_aployments[i].sum}</th>
        <th><img src="../images/{$pages_out_aployments[i].avatar}"></th>
        <th>{$pages_out_aployments[i].name}</th>
        <th>{$pages_out_aployments[i].login}</th>
    </tr>
{/section}
</table>
<div class="myclass">
    <p>Добро пожаловать {$user_name}</p>
    <p><img src="../images/{$user_avatar}" width="50px"></p>
</div>











