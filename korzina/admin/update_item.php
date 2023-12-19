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
require_once('param.php');
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    $query = ("Select name, price, photo, id_cat,har,kol from Korzina.items WHERE id=$id");
    echo"$query";
    $rezult = mysqli_query($abc, $query) or die("Query error");
    $next = mysqli_fetch_array($rezult);
    $name = $next['name'];
    $price = $next['price'];
    $har = $next['har'];
    $kol = $next['kol'];
    $id_cat = $next['id_cat'];
    $photo=$next['photo'];
    if(empty($photo))
    {
        $photo="nophoto.png";
    }
    ?>
    <form action="update_item.php" method="post" enctype="multipart/form-data">
        <p>Отредактируйте название товара</p>
        <input type="text" name="name" value="<?= $name ?>">
        <p>Отредактируйте цену товара</p>
        <input type="text" name="price" value="<?= $price ?>">
        <p>Отредактируйте характеристику товара</p>
        <textarea name="har"><?= $har ?></textarea>
        <p>Отредактируйте количество товара</p>
        <input type="text" name="kol" value="<?= $kol ?>"><br>
        <p>Измените категорию</p>
        <select name="id_cat">
            <?php
            $querycat = "Select id,name from Korzina.categories";
            $rezultcat = mysqli_query($abc, $querycat) or die("Server error");
            while ($nextcat = mysqli_fetch_array($rezultcat)) {
                $idcat = $nextcat['id'];
                $namecat = $nextcat['name'];
                if ($idcat == $id_cat) {
                    echo "<option selected value='" . $idcat . "'>$namecat</option>";
                } else {
                    echo "<option value='" . $idcat . "'>$namecat</option>";
                }
            }
            ?>
        </select><br>
        <img src="../images/<?=$photo?>" width="100px"><br>
        <p>Измените фото</p>
        <input type="file" name="newphoto"><br>
        <input type="hidden" name="oldphoto" value="<?=$photo?>">
        <input type="submit" name="send" value="Редактировать">
        <input type="hidden" name="id" value="<?= $id ?>">
    </form>
    <?php
} else if (isset($_POST['send']) && !empty($_POST['id']) && !empty($_POST['name']) && !empty($_POST['price']) && !empty($_POST['har']) && !empty($_POST['kol'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $har=$_POST['har'];
    $kol=$_POST['kol'];
    $id_cat=$_POST['id_cat'];
    $oldphoto=$_POST['oldphoto'];
    if($_FILES['newphoto']['error']==0)
    {
        if(!empty($oldphoto)&&$oldphoto!="nophoto.png")
        {
            @unlink("../images/$oldphoto");
        }
        $filenameTMP=$_FILES['newphoto']['tmp_name'];
        $filename=time().$_FILES['newphoto']['name'];
        move_uploaded_file($filenameTMP,"../images/$filename");
        $query="update Korzina.items set name='$name', price='$price', kol='$kol', har='$har', id_cat='$id_cat',photo='$filename' WHERE id=$id";
    }
    else
    {
        $query="update Korzina.items set name='$name', price='$price', har='$har', kol='$kol', id_cat='$id_cat' WHERE id=$id";
    }
    //echo"$query";
    mysqli_query($abc,$query)or die("Ошибка отправки формы");
    echo"Успешно отредактировано<br><a href='../out.php'>Редактировать ещё</a>";
}
else
{
    echo"Недостаточно данных для редактирования или редактирование отменено<br><a href=../out.php>Редактировать ещё</a>";
}
mysqli_close($abc);
?>
</body>
</html>