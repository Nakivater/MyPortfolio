<form action="order.php" method="post">
<table border="1">
    <tr>
        <th>№</th>
        <th>Фото</th>
        <th>Название</th>
        <th>Цена</th>
        <th>Количество</th>
        <th>Стоимость</th>
        <th> X </th>
    </tr>
    {section loop=$order_i name=i}
    <tr>
        <th>{$sum++}</th>
        <th><img src="../images/{$order_i[i].photo}" width="50px"></th>
        <th>{$order_i[i].name}</th>
        <th>{$order_i[i].price}</th>
        <th><input type="number" min="1" max="{$order_i[i].max}" name="count{$order_i[i].id}" value="{$order_i[i].count}"></th>
        <th>{$order_i[i].stoimost}</th>
        <th><a href="Korzina.php?id={$order_i[i].id}&mode=dell&script=order"> X </a></th>
    </tr>
    {/section}
    <tr>
        <th colspan="5">Итого</th>
        <th colspan="2">{$totalsum}</th>
    </tr>
    <tr>
        <th colspan="5"><a href="order_final.php">Заказать</a></th>
        <th colspan="2"><a href="Korzina.php?mode=clear" >Очистить</a></th></tr>
    <tr><th colspan="7"><input type="submit" name="per" value="Пересчитать"></th></tr>
</table>
</form>