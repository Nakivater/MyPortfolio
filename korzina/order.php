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
if(isset($_SESSION['items'])&&count($_SESSION['items'])>0)
{
    //////////////////////////////////////////
if(isset($_POST['per']))
{
    //print_r($_POST);
    //echo"<br>";
    for($i=0;$i<count($_SESSION['items']);$i++)
    {
        $nameElement="kolvo".$_SESSION['items'][$i]['id'];
        //echo $nameElement."<br>";
        $_SESSION['items'][$i]['kolvo']=$_POST[$nameElement];
    }
}
    //////////////////////////////////////////
    echo"<form action='order.php' method='post'>";
    echo"<table border='5'><tr>
<th>№</th>
<th>Фото</th>
<th>Название</th>
<th>Цена</th>
<th>Количество</th>
<th>Стоимость</th>
<th> X </th>
</tr>";
    $num=1;
        $totalsum=0;

    foreach ($_SESSION['items'] as $tmp)
    {
        $stoimost=$tmp['price']*$tmp['kolvo'];
        $totalsum=$totalsum+$stoimost;
        $query="Select kol from Korzina.items WHERE id=".$tmp['id'];
        //echo"$query";
        $rez=mysqli_query($abc,$query)or die("Query error");
        $next=mysqli_fetch_array($rez);
        echo"<tr>
<td>$num</td>
<td><img src='images/".$tmp['photo']." 'width='50px'></td>
<td>".$tmp['name']."</td>
<td>".$tmp['price']."</td>
<td><input type='number' min='1' max='".$next['kol']."' name='kolvo".$tmp['id']."' value='".$tmp['kolvo']."'></td>
<td>$stoimost</td>
<td><a href='basket.php?id=".$tmp['id']."&mode=dell&skript=order'> X </a></td>
</tr>";

    }
    echo"<tr>
<th colspan='5'>Итого</th>
<th colspan='2'>$totalsum</th>
</tr><tr>
<th colspan='3'><a href='basket.php?mode=clear'>Удалить</a></th>
<th colspan='4'><a href='order2.php'>Заказать</a></th>
</tr>
<tr>
<th colspan='7'><input type='submit' name='per' value='Пересчитать'></th>
</tr>
</table>";
    echo"</form>";
}
else
{echo"Корзина пуста";}
mysqli_close($abc);
?>
</body>
</html>