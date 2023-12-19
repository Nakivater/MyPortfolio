<?php
session_start();
?>
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
//////

$querycat="Select id,name,logo from Korzina.categories";
$rezultcat=mysqli_query($abc,$querycat)or die("Query categories error");
$sumcat=1;
echo"<table border='1'><tr>
<td>Категории</td>
</tr>
";
while($nextcat=mysqli_fetch_array($rezultcat)) {
    $idc1 = $nextcat['id'];
    $namec = $nextcat['name'];
    $logoc = $nextcat['logo'];
    if(empty($logo)){$logo='nophoto.png';}
    echo"<tr>
<td><a href='catalog.php?idc=".$idc1."'><img src='images/".$logoc."' width='30px'>$namec</a></td>
</tr>
";
}
echo"<td><a href='catalog.php'>Все</a></td></table>";
//////
$zapic=3;
if(isset($_GET['idc']))
{
    $idc=$_GET['idc'];
    $query2="Select id from Korzina.items WHERE id_cat=$idc";
}
else
{
    $query2="Select id from Korzina.items";
}
$rezult1=mysqli_query($abc,$query2)or die("Query listalka error");
$count_str=mysqli_num_rows($rezult1);
$count_pages=ceil($count_str/$zapic);
if(isset($_GET['page']))
{
    $active_page=$_GET['page'];
}
else
{
    $active_page=1;
}
$skip=($active_page-1)*$zapic;
if(isset($_GET['idc']))
{
    $idc=$_GET['idc'];
    $query = "Select id,name,photo,price,kol,har from Korzina.items WHERE id_cat=$idc limit $skip,$zapic";
}
else
    {
        $query = "Select id,name,photo,price,kol,har from Korzina.items  limit $skip,$zapic";
}
//echo"$query";
$rezult=mysqli_query($abc,$query)or die("Query error");
echo"<table border='10'>
<tr>
<td>№</td>
<td>Фотография</td>
<td>Название товара</td>
<td>Цена</td>
<td>Количество</td>
</tr>
";
$sum=1;
while($next=mysqli_fetch_array($rezult))
{
    $id=$next['id'];
        $name=$next['name'];
            $photo=$next['photo'];
                if(empty($photo)){$photo='nophoto.png';}
$kol=$next['kol'];

    $har=$next['har'];
        $id_cat=$next['id_cat'];
            $price=$next['price'];
            echo"<tr>
<td>$sum</td>
<td><img src='images/".$photo."'></td>
<td>$name</td>
<td>$price</td>";
    if(empty($kol))
    {
        echo"<td>Tовара нет на складе</td>";
    }
    else {
        if(isset($_GET['idc']))
        {
            echo"<td>$kol<br><a href='basket.php?id=".$id."&mode=add&page=".$active_page."&idc=".$idc."'>Купить</a></td>";
        }
        else
        {echo "<td>$kol<br><a href='basket.php?id=".$id."&mode=add&page=".$active_page."'>Купить</a></td>";}
    }

echo"
</tr>";
            $sum++;
}
echo"</table>";
echo"<table>";
if($active_page==1)
{
    echo"<td> |<| </td>";
    echo"<td> |<<| </td>";
}
else
{
    if(isset($idc)) {
        echo "<td><a href='catalog.php?page=1&idc=" . $idc . "'>  < </a></td>";
        echo "<td><a href='catalog.php?page=" . ($active_page - 1) . "&idc=" . $idc . "'>  << </a></td>";
    }else
    {
        echo "<td><a href='catalog.php?page=1'>  < </a></td>";
        echo "<td><a href='catalog.php?page=" . ($active_page - 1) . "'>  << </a></td>";
    }
    }
////////
for($i=1;$i<=$count_pages;$i++)
{
    if($active_page==$i)
    {echo"<td>$i</td>";}
else {
    if (isset($idc)) {

        echo "<td><a href='catalog.php?page=" . $i . "&idc=" . $idc . "'>$i</a></td>";
    }
    else{echo "<td><a href='catalog.php?page=" . $i ."'>$i</a></td>";}
}
}
////////
if($active_page==$count_pages)
{
    echo"<td> |>>| </td>";
    echo"<td> |>| </td>";
}
else{
    if(isset($idc))
    {
        echo"<td><a href='catalog.php?page=".($active_page+1)."&idc=".$idc."'> >> </a></td>";
        echo"<td><a href='catalog.php?page=".$count_pages."&idc=".$idc."'> > </a></td>";
    }
    else{
    echo"<td><a href='catalog.php?page=".($active_page+1)."'> >> </a></td>";
    echo"<td><a href='catalog.php?page=".$count_pages."'> > </a></td>";}
}
echo"</table>";
///////////////////Вывод корзины
if(isset($_SESSION['items'])&&count($_SESSION['items'])>0)
{
echo"<table border='1'>
<tr>
<th>№</th>
<th>Фото</th>
<th>Название</th>
<th>Цена</th>
<th>Количество</th>
<th>Стоимость</th>
<th> X </th>
</tr>
";
$count=1;
$totalsum=0;
foreach($_SESSION['items'] as $tmp)
{
    $stoimost=$tmp['price']*$tmp['kolvo'];
$totalsum=$totalsum+$stoimost;
    echo"<tr>
<td>$count</td>
<td><img src='images/".$tmp['photo']."' width='50px'></td>
<td>".$tmp['name']."</td>
<td>".$tmp['price']."</td>
<td>".$tmp['kolvo']."</td>
<td>$stoimost</td>
<td><a href='basket.php?id=".$tmp['id']."&mode=dell'> X </a></td>
</tr>";
$count++;

}
    echo"<tr>
<th colspan='5'>Итого</th>
<th colspan='2'>$totalsum</th>
</tr>
<th colspan='3'><a href='basket.php?mode=clear'>Очистить</a>
    <th colspan='4'><a href='order.php'>Заказать</a></th>";
//print_r($_SESSION['items']);
}
mysqli_close($abc);
?>
</body>
</html>