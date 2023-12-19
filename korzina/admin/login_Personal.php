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
<form method="post" enctype="multipart/form-data" action="login_Personal.php">
    <input placeholder="Введите ваш логин" name="login" type="text">
    <input type="password" name="password" placeholder="Введите пароль">
    <input type="submit" name="send" value="Войти">
</form>
    <?php
}
else
    if(isset($_POST['send'])&&!empty($_POST['login'])&&!empty($_POST['password']))
    {
        require_once("param.php");
        $query="Select login,password from Korzina.Peoples";
        $rezult=mysqli_query($abc,$query)or die("Query error");
        $next=mysqli_fetch_array($rezult);
        
    }
?>
</body>
</html>