<?php
require_once("header.php");
if(isset($_SESSION['userid'])&&isset($_SESSION['username'])&&isset($_SESSION['useravatar'])) {
    if (!isset($_POST['send']) && !empty($_GET['id']) && !empty($_GET['name'])) {
        $smarty_items_delete = new Smarty();
        $smarty_items_delete->assign("id", $_GET['id']);
        $smarty_items_delete->assign("name", $_GET['name']);
        $smarty_items_delete->assign("user_name",$_SESSION['username']);
        $smarty_items_delete->assign("user_avatar",$_SESSION['useravatar']);
        $content = $smarty_items_delete->fetch("delete_items.tpl");
    } else
        if (isset($_POST['send']) && !empty($_POST['id']) && $_POST['del'] == "yes") {
            $query_photo = "Select photo from smarty.items WHERE id=" . $_POST['id'];
            $rezult = mysqli_query($abc, $query_photo) or die("Query error");
            $next = mysqli_fetch_array($rezult);
            if (!empty($next['photo'])) $photo = $next['photo'];
            {
                @unlink("../images/$photo");
            }//Код
            $query = "Delete from smarty.items WHERE id=" . $_POST['id'];
            $rezult = mysqli_query($abc, $query) or die("Query error");
            $content = "Товар удалён";
        } else {
            $content = "Удаление отменено";
        }
    $smarty_main->assign("content", $content);
    $smarty_main->display("main.tpl");
}else{header("location:404.html");}
?>