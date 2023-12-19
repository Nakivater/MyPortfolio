<?php
require_once ("header.php");
if(isset($_SESSION['userid'])&&isset($_SESSION['username'])&&isset($_SESSION['useravatar'])) {
    if (!isset($_POST['send']) && isset($_GET['id']) && !empty($_GET['id'])) {
        $smarty_update = new Smarty();
        $query = "Select meta_title,meta_keyword,meta_descript,title,content from smarty.setting WHERE id=" . $_GET['id'];
        $rezult = mysqli_query($abc, $query) or die("Query error");
        $next = mysqli_fetch_array($rezult);
        $smarty_update->assign("id", $_GET['id']);
        $smarty_update->assign("meta_title", $next['meta_title']);
        $smarty_update->assign("meta_keyword", $next['meta_keyword']);
        $smarty_update->assign("meta_descript", $next['meta_descript']);
        $smarty_update->assign("title", $next['title']);
        $smarty_update->assign("content", $next['content']);
        $smarty_update->assign("user_name",$_SESSION['username']);
        $smarty_update->assign("user_avatar",$_SESSION['useravatar']);
        $content = $smarty_update->fetch("update.tpl");
    } else if (isset($_POST['send']) && !empty($_POST['meta_title']) && !empty($_POST['meta_keyword']) && !empty($_POST['meta_descript']) && !empty($_POST['title']) && !empty($_POST['content'])) {
        $query1 = "Update smarty.setting set meta_title='" . $_POST['meta_title'] . "',meta_keyword='" . $_POST['meta_keyword'] . "',meta_descript='" . $_POST['meta_descript'] . "',title='" . $_POST['title'] . "',content='" . $_POST['content'] . "' WHERE id=" . $_POST['id'];
        $rezult1 = mysqli_query($abc, $query1) or die("Query update error");
        $content = "Ваш запрос успешно отредактирован";
    } else {
        $content = "Недостаточно данных для редактирования";
    }
    $smarty_main->assign("content", $content);
    $smarty_main->display("main.tpl");
}
else{header("location:404.html");}
?>
