<?php
require_once ("header.php");
if(isset($_COOKIE['user_id']))
{setcookie("user_id","",time()-7200);}
if(isset($_COOKIE['user_name']))
{setcookie("user_name","",time()-7200);}
if(isset($_COOKIE['user_avatar']))
{setcookie("user_avatar","",time()-7200);}
if(isset($_COOKIE[session_name()]))
{setcookie(session_name(),"",time()-7200);}
$_SESSION=array();
session_destroy();
header("location:../index.php");
mysqli_close($abc);