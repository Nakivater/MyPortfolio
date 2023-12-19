<?php
require_once ("header.php");
if(isset($_SESSION['userid'])&&isset($_SESSION['username'])&&isset($_SESSION['useravatar'])) {
    $smarty_index_cat = new Smarty();
    $query = "Select id,name_cat from smarty.categories";
    $rezult = mysqli_query($abc, $query) or die("Query error");
    $pages_cat = array();
    while ($next = mysqli_fetch_array($rezult)) {
        $pages_cat[] = array("id" => $next['id'], "name_cat" => $next['name_cat']);
    }
    $smarty_index_cat->assign("user_name",$_SESSION['username']);
    $smarty_index_cat->assign("user_avatar",$_SESSION['useravatar']);
    $smarty_index_cat->assign("pages_cat", $pages_cat);
    $content = $smarty_index_cat->fetch("index_cat.tpl");
    $smarty_index_cat->assign("content", $content);
    $smarty_index_cat->display("main.tpl");
}
else
{header("location:404.html");}
?>