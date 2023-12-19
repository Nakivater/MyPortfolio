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
if(isset($_GET['id'])&&!empty($_GET['id']))
{
    $id=$_GET['id'];
    echo"<td>Вы действительно хотите удалить этот заказ?</td><br><a href='delete.zakaz.php?id=".$id."'>Да</a><br><a href='zakaz.php'>Нет</a>";
}
?>
</body>
</html>