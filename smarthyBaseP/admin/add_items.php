<?php
require_once("header.php");
if(isset($_SESSION['userid'])&&isset($_SESSION['username'])&&isset($_SESSION['useravatar'])) {
    if (!isset($_POST['send'])) {
        $smarty_add_items = new Smarty();
        $query_cat = "Select id,name_cat from smarty.categories";
        $rezult_cat = mysqli_query($abc, $query_cat) or die("Query categories error");
        $cat = array();
        while ($next_cat = mysqli_fetch_array($rezult_cat)) {
            $cat[] = array("id" => $next_cat['id'], "name_cat" => $next_cat['name_cat']);
        }
        $smarty_add_items->assign("cat", $cat);
        $smarty_add_items->assign("user_name",$_SESSION['username']);
        $smarty_add_items->assign("user_avatar",$_SESSION['useravatar']);
        $content = $smarty_add_items->fetch("add_items.tpl");
    } else if (isset($_POST['send']) && !empty($_POST['meta_title']) && !empty($_POST['meta_keyword']) && !empty($_POST['meta_descript']) && !empty($_POST['name']) && !empty($_POST['price']) && !empty($_POST['count']) && !empty($_POST['har'])) {
        if ($_FILES['photo']['error'] == 0) {
            $Filename_TMP = $_FILES['photo']['tmp_name'];
            $Filename = time() . $_FILES['photo']['name'];
            move_uploaded_file("$Filename_TMP", "../images/$Filename");
            $query = "Insert into smarty.items(meta_title, meta_keyword, meta_descript, name, har, price, count, photo, id_cat) VALUES ('" . $_POST['meta_title'] . "','" . $_POST['meta_keyword'] . "','" . $_POST['meta_descript'] . "','" . $_POST['name'] . "','" . $_POST['har'] . "','" . $_POST['price'] . "','" . $_POST['count'] . "','$Filename','" . $_POST['id_cat'] . "')";
        } else {
            $query = "Insert into smarty.items(meta_title, meta_keyword, meta_descript, name, har, price, count, id_cat) VALUES ('" . $_POST['meta_title'] . "','" . $_POST['meta_keyword'] . "','" . $_POST['meta_descript'] . "','" . $_POST['name'] . "','" . $_POST['har'] . "','" . $_POST['price'] . "','" . $_POST['count'] . "','" . $_POST['id_cat'] . "')";
        }
        //echo"$query";
        $rezult = mysqli_query($abc, $query) or die("Query error");
        $content = "Ваш товар успешно добавлен";
    } else {
        $content = "Недостаточно данных для добавления";
    }
    mysqli_close($abc);
    $smarty_main->assign("content", $content);
    $smarty_main->display("main.tpl");
}
else{header("location:404.html");}
?>