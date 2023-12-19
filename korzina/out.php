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
require_once ("admin/param.php");
$query="Select id,name,photo,price,kol,har,id_cat from Korzina.items";
$rezult=mysqli_query($abc,$query)or die ("Query error");
echo"<table border='10'><tr>
<td>№</td>
<td>Название товара</td>
<td>Фото</td>
<td>Цена</td>
<td>Количество</td>
<td>Характеристика</td>
<td>Категория</td>
<td>Редактировать</td>
<td>Удалить</td>
</tr>";
$sum=1;
while($next=mysqli_fetch_array($rezult))
{
    $id=$next['id'];
        $name=$next['name'];
        $photo=$next['photo'];
            $price=$next['price'];
                $kol=$next['kol'];
                    $har=$next['har'];
                        $id_cat=$next['id_cat'];
                        if(empty($photo)){$photo='nophoto.png';}
    echo"<tr>
<td>$sum</td>
<td>$name</td>
<td><img src='images/".$photo."' width='100px'></td>
<td>$price</td>
<td>$kol</td>
<td>$har</td>
<td>$id_cat</td>
<td><a href='/admin/update_item.php?id=".$id."'>Редактировать</a></td>
<td><a href='/admin/delete_item.php?id=".$id."&name=".$name."'>Удалить</a></td>
</tr>";
                        $sum++;
}
echo"</table>";
?>
</body>
</html>