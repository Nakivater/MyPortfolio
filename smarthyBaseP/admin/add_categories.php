<?php
    require_once("header.php");
if(isset($_SESSION['userid'])&&isset($_SESSION['username'])&&isset($_SESSION['useravatar'])) {
    if (!isset($_POST['send'])) {
        $smarty_add_cat = new Smarty();
        $smarty_add_cat->assign("user_name",$_SESSION['username']);
        $smarty_add_cat->assign("user_avatar",$_SESSION['useravatar']);
        $content = $smarty_add_cat->fetch('add_categories.tpl');
    } else if (isset($_POST['send']) && !empty($_POST['name_cat'])) {
        $query = "Insert into smarty.categories (name_cat) VALUES ('" . $_POST['name_cat'] . "')";
        $rezult = mysqli_query($abc, $query) or die("Query error");
        $content = "Категория успешно добавлена";
    } else {
        $content = "Недостаточно данных для добавления";
    }

    $smarty_main->assign('content', $content);
    $smarty_main->display('main.tpl');
}
else{header("location:404.html");}
?>