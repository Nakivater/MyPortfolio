<?php
session_start();
define("SMARTY_LIB","../libs/");
require_once(SMARTY_LIB."Smarty.class.php");
require_once ("param.php");
$smarty_main=new Smarty();
if(isset($_COOKIE['user_id'])&&isset($_COOKIE['user_name'])&&isset($_COOKIE['user_avatar']))
{
    $_SESSION['userid']=$_COOKIE['user_id'];
    $_SESSION['username']=$_COOKIE['user_name'];
    $_SESSION['useravatar']=$_COOKIE['user_avatar'];
}
?>