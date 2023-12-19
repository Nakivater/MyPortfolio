<table border="1">
        {section loop=$archive name=i}
            {if $archive[i].smena!=$archive[i].id_client}
            <tr><th>№</th>
                <th>ФИО</th>
                <th>Телефон</th>
                <th>Email</th>
                <th>Примечания</th>
                <th><a href="resurrect.php?id={$archive[i].id_client}">Востановить</a></th></tr>
            <tr><th>{$num++}</th>
                <th>{$archive[i].name_cl}</th>
                <th>{$archive[i].tel}</th>
                <th>{$archive[i].email}</th>
                <th colspan="2">{$archive[i].prim}</th></tr>
            <tr><th>Фото</th>
                <th>Название товара</th>
                <th>Цена</th>
                <th>Количество</th>
                <th colspan="2">Стоимость</th></tr>
            {/if}
            <tr><th><img src="../../images/{$archive[i].photo}"></th>
                <th>{$archive[i].name_it}</th>
                <th>{$archive[i].price}</th>
                <th>{$archive[i].count_zakaz}</th>
                <th colspan="2">{$archive[i].stoimost}</th></tr>
        {if $archive[i].stroka==$archive[i].str}
            <tr><th colspan="3">Итого</th><th colspan="3">{$archive[i].final}</th></tr>
        {/if}
        {/section}
    </table>