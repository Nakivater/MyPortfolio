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
if(isset ($_GET['id'])&&!empty($_GET['id'])&&!empty($_GET['name']))
{
    $id = $_GET['id'];
    $name = $_GET['name'];
    ?>
    <h6>Вы действительно хотите удалить этот товар - <?= $name ?></h6>
    <form action="delete_item.php." method="post">
        <input type="radio" name="del" checked value="yes">Да
        <input type="radio" name="del" value="no">Нет
        <input type="submit" name="send" value="Потвердить">
        <input type="hidden" name="id" value="<?= $id ?>">
    </form>
    <?php
}
else if(isset($_POST['send'])&&isset($_POST['id'])&&!empty($_POST['id'])&&$_POST['del']=='yes') {
    require_once("param.php");
    $id = $_POST['id'];
    $queryf="Select photo from Korzina.items WHERE id=$id";
    $rezultf=mysqli_query($abc,$queryf)or die("Query error");
    $nextf=mysqli_fetch_array($rezultf);
    $photo=$nextf['photo'];
    if(!empty($photo))
    {
        @unlink("../images/$photo");
    }
    $query = "delete from Korzina.items WHERE id=$id";
    //echo"$query";
    mysqli_query($abc,$query ) or die('QUERY error');
    echo "Удалено <br><a href=../out.php>Удалить ещё</a>";
    mysqli_close($abc);
}
else
{
    echo"Удаление отменено или невозможно<br>";
}
?>
</body>
</html>
