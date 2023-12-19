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
if(isset($_GET['id'])&&!empty($_GET['id']))
{
$id=$_GET['id'];
$query="Select name,logo from Korzina.categories WHERE id=$id";
$rezult=mysqli_query($abc,$query)or die("Query error");
$next=mysqli_fetch_array($rezult);
$name=$next['name'];
$logo=$next['logo'];
    if(empty($logo))
    {$logo="nophoto.png";}
    ?>
    <form action="update_cat.php" method="post" enctype="multipart/form-data">
        <p>Отредактируйте название</p>
        <input type="text" name="name" value="<?=$name?>">
        <img src='../images/<?=$logo?>'>
        <p>Отредактируйте фотографию</p>
<input type="file" name="newphoto">
        <input type="hidden" name="oldphoto" value="<?=$logo?>">
        <input type="submit" name="send" value="Редактировать">
        <input type="hidden" name="id" value="<?=$id?>">
    </form>
<?php
}
else if(isset($_POST['send'])&&!empty($_POST['name'])&&!empty($_POST['id']))
{
$id=$_POST['id'];
$name=$_POST['name'];
$oldphoto=$_POST['oldphoto'];
if($_FILES['newphoto']['error']==0)
{
    if(!empty($oldphoto)&&$oldphoto!='nophoto.png')
    {
@unlink("../images/$oldphoto");
    }
    $filename_TMP=$_FILES['newphoto']['tmp_name'];
        $filename=time().$_FILES['newphoto']['name'];
        move_uploaded_file($filename_TMP,"../images/$filename");
    $query1="Update Korzina.categories set name='$name',logo='$filename' WHERE id=$id";
}
else
{$query1="Update Korzina.categories set name='$name' WHERE id=$id";}
echo"$query1";
$rezult1=mysqli_query($abc,$query1)or die("Query error");
echo"Категория успешно редактирована<br><a href='out_cat.php'>Вернуться</a>";
}
else{echo"Редактирование отменено или невозможно";}
mysqli_close($abc);
?>
</body>
</html>