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
require_once ("param.php");
if(!isset($_POST['send']))
{
?>
<h4>Создайте новою категорию</h4>
    <form action="add_cat.php" enctype="multipart/form-data" method="post">
        <input type="text" name="name" placeholder="Введите название категории">
        <p>Выберите фотографию для категории</p>
        <input type="file" name="photo"><br>
        <input type="submit" name="send" value="Создать">
    </form>
    <?php
}
else if(isset($_POST['send'])&&!empty($_POST['name']))
    {
        $name=$_POST['name'];
        if(['photo']['error']==0)
        {
            $filename_TMP=$_FILES['photo']['tmp_name'];
                $filename=time().$_FILES['photo']['name'];
                move_uploaded_file($filename_TMP,"../images/$filename");
          $query="Insert into Korzina.categories(name, logo)values('$name','$filename')";
        }
        else{$query="Insert into Korzina.categories(name)values('$name')";}
        $rezult=mysqli_query($abc,$query)or die ("Query error");
        echo"Ваш запрос успешно обработан";
    }
    else{echo"Недостаточно данных для создания категории";}
    mysqli_close($abc);
?>
</body>
</html>