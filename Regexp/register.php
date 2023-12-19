<?php
$abc=mysqli_connect("localhost","root","","regexp");
if(!empty($_POST['name'])&& !empty($_POST['login'])&& !empty($_POST['password'])&&$_POST['password']==$_POST['password1']&& !empty($_POST['tel'])&& !empty($_POST['kod'])&& !empty($_POST['pas1'])&& !empty($_POST['pas2'])&& !empty($_POST['email'])&& !empty($_POST['domen']))
{
    $query="Insert into regexp.Register (name, login, password, tel, kod, pas1, pas2, email, domen) VALUES ('".$_POST['name']."', '".$_POST['login']."', SHA1('".$_POST['password']."'), '".$_POST['tel']."', '".$_POST['kod']."', '".$_POST['pas1']."', '".$_POST['pas2']."', '".$_POST['email']."', '".$_POST['domen']."')";
$rezult=mysqli_query($abc,$query)or die("Query error");
echo"Ваши данные успешно добавлены";
}
else{echo"Недостаточно данных для добавления";}
