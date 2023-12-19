<?php
require_once ("header.php");
if(isset($_SESSION['userid'])&&isset($_SESSION['username'])&&isset($_SESSION['useravatar'])) {
////////////////////////////////////////

////////////////////////////////////////
    $smarty_index_page = new Smarty();
    /*$query="Select id,name from smarty.setting";
    $rezult=mysqli_query($abc,$rezult)or die("Query error");
    $next=mysqli_fetch_array($rezult);
    $smarty_main->assign("int",$next['int']);
    $smarty_main->assign("name",$next['name']);
    */
    $query = "Select id,name from smarty.setting";
    $rezult = mysqli_query($abc, $query) or die("Query error");
    $pages = array();
    while ($next = mysqli_fetch_array($rezult)) {
        $pages[] = array("id" => $next['id'], "name" => $next['name']);
    }
    $smarty_index_page->assign("user_name",$_SESSION['username']);
    $smarty_index_page->assign("user_avatar",$_SESSION['useravatar']);
    $smarty_index_page->assign("pages", $pages);
    $content = $smarty_index_page->fetch("index_page.tpl");//fetch компилирует php и tpl файл и результат компиляциии срхраняет в переменную не показывая на екран.
    $smarty_main->assign("content", $content);

    $smarty_main->display("main.tpl");
    }
    else
    {header("location:404.html");}
?>