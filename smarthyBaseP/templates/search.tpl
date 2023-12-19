<table border="1">
    <tr>
        <th>№</th>
        <th>Товар</th>
        <th>Характеристика</th>
        <th>Цена</th>
        <th>Количество</th>
        <th>Фото</th>
        <th>Категория</th>
    </tr>
    {section loop=$items name=i}
        <tr>
            <th>{$items[i].sum}</th>
            <th>{$items[i].name}</th>
            <th>{$items[i].har}</th>
            <th>{$items[i].price}</th>
            <th>{$items[i].count}</th>
            <th><img src="images/{$items[i].photo}" width="50px"></th>
            <th>{$items[i].id_cat}</th>
        </tr>
    {/section}
</table>