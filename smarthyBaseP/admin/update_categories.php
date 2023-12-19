<?php
require_once ("header.php");
if(isset($_SESSION['userid'])&&isset($_SESSION['username'])&&isset($_SESSION['useravatar'])) {
    if (!isset($_POST['send']) && isset($_GET['id']) && !empty($_GET['id'])) {
        $smarty_update_cat = new Smarty();
        $query = "Select name_cat from smarty.categories WHERE id=" . $_GET['id'];
        $rezult = mysqli_query($abc, $query) or die("Query error");
        $next = mysqli_fetch_array($rezult);
        $smarty_update_cat->assign("id", $_GET['id']);
        $smarty_update_cat->assign("name_cat", $next['name_cat']);
        $smarty_update_cat->assign("user_name",$_SESSION['username']);
        $smarty_update_cat->assign("user_avatar",$_SESSION['useravatar']);
        $content = $smarty_update_cat->fetch("update_categories.tpl");
    } else
        if (isset($_POST['send']) && !empty($_POST['name_cat']) && !empty($_POST['id'])) {
            $query1 = "Update smarty.categories set name_cat='" . $_POST['name_cat'] . "' WHERE id=" . $_POST['id'];
            $rezult1 = mysqli_query($abc, $query1) or die("Query1 error");
            $content = "Категория успешно отредактирована";
        } else {
            $content = "Пустое поле. Невозможно отредактировать";
        }
    $smarty_main->assign("content", $content);
    $smarty_main->display("main.tpl");
}
else{header("location:404.html");}
?>