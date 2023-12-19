<form action="order_final.php" method="post">
    <input type="text" name="name" placeholder="Введите Ф.И.О."><br>
    <input type="text" name="tel" placeholder="Введите телефон"><br>
    <input type="text" name="email" placeholder="Введите email"><br>
    <p>Введите примечание</p>
    <textarea name="prim"></textarea>
<table border="2">
    <tr><th>№</th>
    <th>Фото</th>
    <th>Название</th>
    <th>Цена</th>
    <th>Количество</th>

 </tr>
    {section loop=$order name=i}
        <tr>
            <th>{$sum++}</th>
            <th><img src="../images/{$order[i].photo}" width="50px"></th>
            <th>{$order[i].name}</th>
            <th>{$order[i].price}</th>
            <th>{$order[i].count}</th>
        </tr>
    {/section}
    <tr><th colspan="4">Итого</th><th colspan="2">{$totalsum}</th></tr>
</table>
    <input type="submit" name="send" value="Оформить заказ">
</form>