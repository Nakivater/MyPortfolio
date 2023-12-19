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
if(!isset($_POST['send'])) {
    ?>
<h4>Приветствую хозяин</h4><br>
    <h4>Добавление нового сотрудника</h4>
    <form action="Reqistration_Personal.php" enctype="multipart/form-data" method="post">
        <input type="text" placeholder="Введите ваше ФИО" name="name"><br>
        <h4>Выберите ваш аватар</h4>
        <input type="file" name="avatar"><br>
        <input type="text" placeholder="Введите ваш телефон" name="tel"><br>
        <input type="text" placeholder="Введите ваш email" name="email"><br>
        <input type="text" placeholder="Введите ваш логин" name="login"><br>
        <input type="password" placeholder="Введите пароль" name="password"><br>
        <input type="password" placeholder="Повторите ввод пароля" name="password1"><br>
<select name="is_Admin">
    <option value="1">Админ</option>
    <option selected value="0">Оператор</option>
</select>
        <input type="submit" name="send" value="Зарегестрировать">
    </form>
    <?php
}
else if(isset($_POST['send']) &&!empty($_POST['name']) &&!empty($_POST['tel']) &&!empty($_POST['email']) &&!empty($_POST['login']) &&!empty($_POST['password'])&&$_POST['password']==$_POST['password1'])
{
    require_once("param.php");
if($_FILES['avatar']['error']==0)
    {
$Files_tmp=$_FILES['avatar']['tmp_name'];
    $Files=time().$_FILES['avatar']['name'];
    move_uploaded_file($Files_tmp,"../images/$Files");
$query="Insert into Korzina.Peoples(name, avatar, tel, email, login, password,is_Admin) VALUES ('".$_POST['name']."','$Files','".$_POST['tel']."','".$_POST['email']."','".$_POST['login']."',SHA1('".$_POST['password']."'),'".$_POST['is_Admin']."')";
    }
    else {$query="Insert into Korzina.Peoples(name, tel, email, login, password,is_Admin) VALUES ('".$_POST['name']."','".$_POST['tel']."','".$_POST['email']."','".$_POST['login']."',SHA1('".$_POST['password']."'),'".$_POST['is_Admin']."')";}
    echo"$query";
    $rezult=mysqli_query($abc,$query)or die("Query error");
echo"Ваши данные успешно добавлены";
}
    else
    {
        echo"Введены не все данные или регистрация отменена";
    }
?>
</body>
</html>