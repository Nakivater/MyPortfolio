<?php
require_once ("header.php");
$smarty_login_aployments=new Smarty();
if(!isset($_POST['send'])){
    $content=$smarty_login_aployments->fetch("login_aployments.tpl");
} else if(isset($_POST['send'])&&!empty($_POST['login'])&&!empty($_POST['password']))
{
    $query = "Select id,name,avatar from smarty.Aployments WHERE login='".$_POST['login']."'and password=SHA1('".$_POST['password']."')";
    echo"$query";
$rezult=mysqli_query($abc,$query)or die("Query error");
    if(mysqli_num_rows($rezult)==1)
    {
        $next=mysqli_fetch_array($rezult);
        if(empty($next['avatar'])){$next['avatar']='nophoto.png';}
        $content="Добро пожаловать ".$next['name']."";
        /////////////////////
        setcookie("user_id",$next['id'],time()+60*60*24*30);
        setcookie("user_name",$next['name'],time()+60*60*24*30);
        setcookie("user_avatar",$next['avatar'],time()+60*60*24*30);
        /////////////////////
$_SESSION['userid']=$next['id'];
$_SESSION['username']=$next['name'];
$_SESSION['useravatar']=$next['avatar'];
        /////////////////////
        header("location:index_page.php");
    }else
    {$content="Логин или пароль не совпадают";}
}else
{
    $content="Недостаточно данных для входа";
}
$smarty_main->assign("content",$content);
$smarty_main->display("main.tpl");