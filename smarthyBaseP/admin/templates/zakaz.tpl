<table border="1">
    {section loop=$zakaz name=i}
        {if $zakaz[i].smena!=$zakaz[i].id_client}
        <tr>
            <th>№</th>
            <th>ФИО</th>
            <th>Телефон</th>
            <th>Email</th>
            <th>Примечания</th>
            <th>Дата заказов</th>
            <th><a href="run_zakaz.php?id={$zakaz[i].id_client}">Выполнить</a></th>
            <th><a href="del_zakaz.php?id={$zakaz[i].id_client}">Удалить</a></th>
        </tr>
        <tr>
            <th>{$num++}</th>
            <th>{$zakaz[i].name_client}</th>
            <th>{$zakaz[i].tel}</th>
            <th>{$zakaz[i].email}</th>
            <th>{$zakaz[i].prim}</th>
            <th colspan="3">{$zakaz[i].data_zk}</th>
            </tr>

        <tr>
            <th>Фото</th>
            <th>Название товара</th>
            <th>Цена</th>
            <th>Количество заказов</th>
            <th colspan="4">Стоимость</th>
        </tr>
        {/if}
        <tr>
            <th><img src="../../images/{$zakaz[i].photo}"></th>
            <th>{$zakaz[i].name_it}</th>
            <th>{$zakaz[i].price}</th>
            <th>{$zakaz[i].count_zakaz}</th>
            <th colspan="4">{$zakaz[i].stoimost}</th>
        </tr>
        {if $zakaz[i].stroka==$zakaz[i].str}
        <tr><th colspan="4">Итого</th><th colspan="4">{$zakaz[i].final}</th></tr>
        {/if}
    {/section}
</table>