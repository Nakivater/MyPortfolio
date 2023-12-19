<?php
require_once ("header.php");
if(isset($_SESSION['userid'])&&isset($_SESSION['username'])&&isset($_SESSION['useravatar'])) {
    $smarty_index_items = new Smarty();
    $query = "Select id,name,photo from smarty.items";
    $rezult = mysqli_query($abc, $query) or die("Query error");
    $pages_items = array();
    $sum = 1;
    while ($next = mysqli_fetch_array($rezult)) {
        if (empty($next['photo'])) {
            $photo = 'nophoto.png';
        } else {
            $photo = $next['photo'];
        }
        $pages_items[] = array("sum" => $sum, "id" => $next['id'], "name" => $next['name'], "photo" => $photo);
        $sum++;
    }
//print_r($pages_items);
    $smarty_index_items->assign("user_name",$_SESSION['username']);
    $smarty_index_items->assign("user_avatar",$_SESSION['useravatar']);
    $smarty_index_items->assign("pages_items", $pages_items);
    $content = $smarty_index_items->fetch("index_items.tpl");
    $smarty_main->assign("content", $content);
    $smarty_main->display("main.tpl");
}
else{header("location:404.html");}
?>