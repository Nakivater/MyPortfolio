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
if(isset($_GET['id'])&&!empty($_GET['id'])&&!empty($_GET['name']))
{
    $id=$_GET['id'];
$name=$_GET['name'];
    ?>
    <form action="delete_cat.php" method="post">
        <input type="radio" name="del" checked value="Yes">Да
        <input type="radio" name="del" value="No">Нет
        <input type="submit" name="send" value="Отправить">
        <input type="hidden" name="id" value="<?= $id ?>">
    </form>
    <?php
}
else if(isset($_POST['send'])&&isset($_POST['id'])&&!empty($_POST['id'])&&$_POST['del']=="Yes")
{
    require_once ("param.php");
    $id=$_POST['id'];
    $query1="Select logo from Korzina.categories WHERE id=$id";
    $rezult1=mysqli_query($abc,$query1)or die("Query cat error");
    $next=mysqli_fetch_array($rezult1);
    $photo=$next['logo'];
    if(!empty($photo))
    {
    @unlink("../images/$photo");
    }
$query="delete from Korzina.categories WHERE id=$id";
//echo"$query";
$rezult=mysqli_query($abc,$query)or die("Query error");
echo"Категория успешно удалена<br><a href='out_cat.php'>Вернуться</a>";
    mysqli_close($abc);
}
else{echo"Удаление отменено или невозможно";}
?>
</body>
</html>