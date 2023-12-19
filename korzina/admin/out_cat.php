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
$query="Select id,name,logo from Korzina.categories";
$rezult=mysqli_query($abc,$query)or die ("Query error");
echo"<table border='10'><tr>
<td>№</td>
<td>Id</td>
<td>Name</td>
<td>Logo</td>
<td>Редактировать</td>
<td>Удалить</td>
</tr>";
$sum=1;
while($next=mysqli_fetch_array($rezult))
{
    $id=$next['id'];
    $name=$next['name'];
    $logo=$next['logo'];
    if(empty($logo)){$logo='nophoto.png';}
    echo"<tr>
<td>$sum</td>
<td>$id</td>
<td>$name</td>
<td><img src='../images/".$logo."' width='100px'></td>
<td><a href='update_cat.php?id=".$id."'>Pедактировать</a></td>
<td><a href='delete_cat.php?id=".$id."&name=".$name."'>Удалить</a></td>
</tr>";
    $sum++;
}
echo"</table>";
mysqli_close($abc);
?>
</body>
</html>