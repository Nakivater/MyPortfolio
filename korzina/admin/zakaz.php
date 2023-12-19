<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
require_once ("param.php");
$query="Select Client.name as name_cl,tel,email,adress,xar,id_Klient,relation.kolvo as kolvor,data,items.name as name_it, photo,price from client inner join relation on client.id=relation.id_Klient inner JOIN items on 
relation.id_items=items.id WHERE status=0 order by data DESC,id_Klient DESC";
$rezult=mysqli_query($abc,$query)or die ("Query error");
echo"<table border ='1'>";

$num=1;
$smena=0;//Переменная будет отслеживать смену каждого клиента.
$stroka=1;//Счетчик строк товара одного клиента.
$stoimost=0;
while($next=mysqli_fetch_array($rezult))
{
 $name_c=$next['name_cl'];
     $tel=$next['tel'];
         $email=$next['email'];
             $photo=$next['photo'];
                 if($photo==0){$photo='nophoto.png';}
                 $adress=$next['adress'];
                     $xar=$next['xar'];
                         $id_Klient=$next['id_Klient'];
                             $kolvo=$next['kolvor'];
                                 $data=$next['data'];
                                     $name_it=$next['name_it'];
                                         $price=$next['price'];
   $st=$kolvo*$price;
   $stoimost=$stoimost+$st;
   if($smena!=$id_Klient) {
       $stroka=1;
       $query1="Select id_items from relation Where id_Klient=$id_Klient";
       $rezult1=mysqli_query($abc,$query1)or die("Querry 1 error");
       $count_str=mysqli_num_rows($rezult1);
       echo "
<tr>
<td>№</td>
<td>ФИО</td>
<td>Телефон</td>
<td>Email</td>
<td>Адрес</td>
<td>Характеристика</td>
<td>Дата подачи</td>
<td>Выполнить заказ</td>
<td>Удалить заказ</td>
</tr>";
       echo "<tr>
<td>$num</td>
<td>$name_c</td>
<td>$tel</td>
<td>$email</td>
<td>$adress</td>
<td>$xar</td>
<td>$data</td>
<td><a href='run.php?id=".$id_Klient."'>Выполнить</a></td>
<td><a href='del.q.php?id=".$id_Klient."'>Удалить</a></td>
 </tr>";

       echo "<tr>
<td colspan='2'>Фото</td>
<td>Название товара</td>
<td>Цена</td>
<td>Количество</td>
<td colspan='4'>Стоимость</td>


</tr>";
   }
echo"<tr>
<td colspan='2'><img src='/images/$photo' width='50px'></td>
<td>$name_it</td>
<td>$price</td>
<td>$kolvo</td>
<td colspan='4'>$st</td>

</tr>";
   if($smena!=$id_Klient)
   {
       $smena=$id_Klient;
       $num++;
   }
if($stroka==$count_str)
{
           echo "<tr><td colspan='5'>Итого</td>";
           echo "<td colspan='5'>$stoimost</td></tr>";
$stoimost=0;
}
   $stroka++;
}
echo"</table>";
/*
 * Select items.id as id_item,items.name as name_item,photo,price,categories.name as name_cat from items inner join categories on items.id_cat=categories.id
 * Данный запрос выбирает данные которые связывает оператором inner join который выбирает только взаимосвязаные строки из двух таблиц по оющим полям: первичный и внещный ключ.
 * Select items.id as id_item,items.name as name_item,photo,price,categories.name as name_cat from items left join categories on items.id_cat=categories.id
 * Данный запрос выбирает данные которые связывает оператором left join который выбирает все строки из левой таблицы а из правой только взаимосвязаные.
 * Select items.id as id_item,items.name as name_item,photo,price,categories.name as name_cat from items right join categories on items.id_cat=categories.id
 * Данный запрос выбирает данные которые связывает оператором right join выбирает все строки из правой таблицы, а из левой только взаимосвязаные.
 */
?>
</body>
</html>