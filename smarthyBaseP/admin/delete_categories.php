<?php
require_once("header.php");
if(isset($_SESSION['userid'])&&isset($_SESSION['username'])&&isset($_SESSION['useravatar'])) {
    if (!isset($_POST['send']) && !empty($_GET['id']) && !empty($_GET['name_cat'])) {
        $smarty_delete_cat = new Smarty();
        $smarty_delete_cat->assign("name_cat", $_GET['name_cat']);
        $smarty_delete_cat->assign("id", $_GET['id']);
        $smarty_delete_cat->assign("user_name",$_SESSION['username']);
        $smarty_delete_cat->assign("user_avatar",$_SESSION['useravatar']);
        $content = $smarty_delete_cat->fetch("delete_categories.tpl");
    } else
        if (isset($_POST['send']) && !empty($_POST['id']) && ($_POST['del'] == "yes")) {
            $query = "Delete from smarty.categories WHERE id=" . $_POST['id'];
            $rezult = mysqli_query($abc, $query) or die("Query error");
            $content = "Категория успешно удалена";
        } else {
            $content = "Удаление отменено";
        }
    $smarty_main->assign("content", $content);
    $smarty_main->display("main.tpl");
}else{header("location:404.html");}
?>
