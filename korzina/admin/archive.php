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
require_once("param.php");
$query="SELECT Client.name as name_cl,tel,email,adress,xar,id_Klient,relation.kolvo as kolvor, data,items.name as name_it,photo,price from Client INNER JOIN relation on Client.id=relation.id_Klient INNER JOIN items on relation.id_items=items.id WHERE STATUS=1 order by DATA DESC,id_Klient DESC";
//echo"$query";
$rezult=mysqli_query($abc,$query)or die("Query error");
echo"<table border='1'>";
$smena=0;
$stroke=1;
$stoimost=0;
$num=1;
while($next=mysqli_fetch_array($rezult))
{
    $name_c=$next['name_cl'];
        $tel=$next['tel'];
        $email=$next['email'];
            $photo=$next['photo'];
                if(empty($photo)){$photo='nophoto.png';}
        $adress=$next['adress'];
            $xar=$next['xar'];
                $id_Klient=$next['id_Klient'];
                    $kolvo=$next['kolvor'];
                        $data=$next['data'];
$name_it=$next['name_it'];
                            $price=$next['price'];
                            $st=$kolvo*$price;

                            if($smena!=$id_Klient)
                            {
                                $stroke=1;
                                $stoimost=0;
                                $query1="Select id_items from Korzina.relation Where id_Klient=$id_Klient";
                                $rezult1=mysqli_query($abc,$query1)or die("Query error");
                                $count_str=mysqli_num_rows($rezult1);
                                echo"<tr>
<td>№</td>
<td>Фио</td>
<td>Телефон</td>
<td>Email</td>
<td>Адрес</td>
<td>Характеристика</td>
<td>Дата</td>
<td>Востановить</td></tr>";
                                echo"<tr>
<td>$num</td>
<td>$name_c</td>
<td>$tel</td>
<td>$email</td>
<td>$adress</td>
<td>$xar</td>
<td>$data</td>
<td><a href='remiss.php?id=".$id_Klient."'>Востановить</a></td>
</tr>";
echo"<tr>
<td>Фото</td>
<td>Название товара</td>
<td colspan='2'>Цена</td>
<td>Количество</td>
<td colspan='3'>Стоимость</td>
</tr>";
                            }
    $stoimost=$st+$stoimost;
echo"<tr>
<td><img src='/images/$photo' width='50px'></td>
<td>$name_it</td>
<td colspan='2'>$price</td>
<td>$kolvo</td>
<td colspan='3'>$st</td>
</tr>";

if($smena!=$id_Klient)
{
    $smena=$id_Klient;
    $num++;
}
if($stroke==$count_str)
{
    echo"<tr><td colspan='5'>Итого</td>";
    echo"<td colspan='5'>$stoimost</td></tr>";
    $stoimost=0;
}
$stroke++;
}
echo"</table>"
?>
</body>
</html>