<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
require_once("param.php");
if(!isset($_POST['send'])) {
    ?>
<form action="add_item.php" method="post" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="Введите название товара"><br>
    <h6>Выберите фотографию товара</h6><br>
    <input type="file" name="photo"><br>
    <input type="text" name="price" placeholder="Введите цену товара"><br>
    <input type="text" name="kol" placeholder="Введите количество товаров"><br>
    <input type="text" name="har" placeholder="Введите характеристику товара"><br>
    <select name="id_cat">
        <?php
        $query="Select id,name,logo from Korzina.categories";
        $rezult=mysqli_query($abc,$query)or die("Query error");
while($next=mysqli_fetch_array($rezult))
{
    $id_cat=$next['id'];
        $name=$next['name'];
        $logo=$next['logo'];
        echo"<option value='".$id_cat."'>$name</option>";
}
        ?>
    </select>
    <input type="submit" name="send" value="Отправить">
</form>
    <?php
}
else if(isset($_POST['send'])&&!empty($_POST['name'])&&!empty($_POST['price'])&&!empty($_POST['kol'])&&!empty($_POST['har'])&&!empty($_POST['id_cat']))
{
$name=$_POST['name'];
$price=$_POST['price'];
$kol=$_POST['kol'];
$har=$_POST['har'];
$id_cat=$_POST['id_cat'];
if($_FILES['photo']['error']==0)
{
    $filename_TMP=$_FILES['photo']['tmp_name'];
        $filename=time().$_FILES['photo']['name'];
move_uploaded_file($filename_TMP,"../images/$filename");
    $query="Insert into Korzina.items(name,price,kol,har,id_cat,photo)values('$name','$price','$kol','$har','$id_cat','$filename')";
}
else{$query="Insert into Korzina.items(name,price,kol,har,id_cat)values('$name','$price','$kol','$har','$id_cat')";}
//echo"$query";
$rezult1=mysqli_query($abc,$query)or die("Query error");
echo"Ваши данные успешно добавлены";
}
else{echo"Недостаточно данных для добавления";}
mysqli_close($abc);
?>
</body>
</html>