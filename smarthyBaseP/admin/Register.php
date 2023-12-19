<?php
require_once ("param.php");
define("SMARTY_LIB","../libs/");
require_once (SMARTY_LIB."Smarty.class.php");
$smarty_main=new Smarty();
$smarty_regiter=new Smarty();
$content=$smarty_regiter->fetch("Register.tpl");
if(!isset($_POST['send'])){$smarty_main->assign("content",$content);
$smarty_main->display("main.tpl");}else
if(isset($_POST['send'])&&!empty($_POST['name'])&&!empty($_POST['login'])&&$_POST['password']==$_POST['password1'])
{
    if($_FILES['avatar']['error']==0)
    {
        $filename_tmp=$_FILES['avatar']['tmp_name'];
        $filename=time().$_FILES['avatar']['name'];
        move_uploaded_file($filename_tmp,"../images/$filename");
        $query="Insert into smarty.Aployments (name, avatar, login, password) VALUES ('".$_POST['name']."','$filename','".$_POST['login']."',SHA1('".$_POST['password']."'))";

    }
    else{$query="Insert into smarty.Aployments (name, login, password) VALUES ('".$_POST['name']."','".$_POST['login']."',SHA1('".$_POST['password']."'))";}
    $rezult=mysqli_query($abc,$query)or die("Query error");
    $content="Регистрация прошла успешно";
}
else
{
    $content="Недостаточно данных для регистрации";
}
$smarty_main->assign("content",$content);
$smarty_main->display("main.tpl");
?>