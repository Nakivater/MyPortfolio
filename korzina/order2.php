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
if(isset($_SESSION['items']))
{
    if(!isset($_POST['send'])) {
        echo "<form action='order2.php' method='post' enctype='multipart/form-data'>
<input name='name' type='text' placeholder='Введите ФИО'><br>
<input name='tel' type='text' placeholder='Введите телефон'><br>
<input name='email' type='text' placeholder='Введите email'><br>
<input name='adress' type='text' placeholder='Введитк адрес'><br>
<textarea name='xar'>Примечание</textarea><br>";
    $totalsum=0;
    $num=1;
    echo"<table border='1'><tr>
<th>№</th>
<th>Фото</th>
<th>Название</th>
<th>Цена</th>
<th>Количество</th>
<th>Сумма</th>
</tr>";
    foreach ($_SESSION['items'] as $tmp)
    {
        $stoimost=$tmp['price']*$tmp['kolvo'];
        $totalsum=$stoimost+$totalsum;
        echo"<tr><td>$num</td>
<td><img src='images/".$tmp['photo']."' width='10px'></td>
<td>".$tmp['name']."</td>
<td>".$tmp['price']."</td>
<td>".$tmp['kolvo']."</td>
<td>$stoimost</td></tr>";
       $num++;
    }
    echo"<tr>
<th colspan='5'>Итого</th>
<th colspan='2'>$totalsum</th>
</tr></table>";
    echo"<input type='submit' name='send' value='Отправить'>
</form>";
    }else if(isset($_POST['send'])&&!empty($_POST['name'])&&!empty($_POST['tel']&&!empty($_POST['email'])&&!empty($_POST['adress'])&&!empty($_POST['xar']))) {
        $name=$_POST['name'];
        $tel=$_POST['tel'];
        $email=$_POST['email'];
        $adress=$_POST['adress'];
        $xar=$_POST['xar'];
    $query="Insert into Korzina.Client(name,tel,email,adress,xar) VALUES ('$name','$tel','$email','$adress','$xar')";
    //echo"$query";
    $rezult=mysqli_query($abc,$query)or die("Query error");
$id_client=mysqli_insert_id($abc);//Функция insert id выбирает id только что добавленной строки по интедификатору подключения $abc. Внимание! Функция срабатывает после myskli_query которая отправляе insert into.
foreach ($_SESSION['items'] as $tmp)
{
    $query1="Insert into Korzina.relation (id_Klient,id_items,kolvo,data) values ('$id_client',".$tmp['id'].",".$tmp['kolvo'].",now())";
    //echo"$query1";
    mysqli_query($abc,$query1)or die("Database error");
}
    echo"Ваш заказ успешно оформлен";
unset($_SESSION['items']);
$_SESSION['items']=array();
    }else
    {echo"Недостаточно данных для регистрации заказа";}
}
else
{echo"Корзина пуста";}
mysqli_close($abc);
?>
</body>
</html>