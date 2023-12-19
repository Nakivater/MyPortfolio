<?php
require_once ("header.php");
if(isset($_SESSION['userid'])&&isset($_SESSION['username'])&&isset($_SESSION['useravatar'])) {
if(!isset($_POST['send'])&&!empty($_GET['id']))
{
    $query="Select id,meta_title,meta_keyword,meta_descript,name,har,price,count,photo,id_cat from smarty.items WHERE id=".$_GET['id'];
    $rezult=mysqli_query($abc,$query)or die("Query error");
    $next=mysqli_fetch_array($rezult);
 $smarty_items_update=new Smarty();
    ////////////////////////////////
    $query_cat="Select id, name_cat from smarty.categories";
    //echo"$query_cat";
    $rezult_cat=mysqli_query($abc,$query_cat)or die("Query categories error");
    $cat=array();
    while($next_cat=mysqli_fetch_array($rezult_cat))
    {
        $cat[]=array("id_cat"=>$next_cat['id'],"name_cat"=>$next_cat['name_cat']);
    }
    //print_r($cat);
    $smarty_items_update->assign("cat",$cat);
    $smarty_items_update->assign("id_cat",$next['id_cat']);
    ////////////////////////////////
    $smarty_items_update->assign("id",$next['id']);
    $smarty_items_update->assign("meta_title",$next['meta_title']);
    $smarty_items_update->assign("meta_keyword",$next['meta_keyword']);
    $smarty_items_update->assign("meta_descript",$next['meta_descript']);
    $smarty_items_update->assign("name",$next['name']);
    $smarty_items_update->assign("har",$next['har']);
    $smarty_items_update->assign("price",$next['price']);
    $smarty_items_update->assign("count",$next['count']);
    if(empty($next['photo']))
    {$photo='nophoto.png';}
    else
        {$photo=$next['photo'];}
    $smarty_items_update->assign("photo",$photo);
    $smarty_items_update->assign("user_name",$_SESSION['username']);
    $smarty_items_update->assign("user_avatar",$_SESSION['useravatar']);
$content=$smarty_items_update->fetch("update_items.tpl");
}
else
    if(isset($_POST['send']) &&!empty($_POST['meta_title']) &&!empty($_POST['meta_keyword']) &&!empty($_POST['meta_descript']) &&!empty($_POST['name']) &&!empty($_POST['har']) &&!empty($_POST['price']) &&!empty($_POST['count']) &&!empty($_POST['id_cat_new']))
    {
        if($_FILES['newphoto']['error']==0)
        {
            if(!empty($_POST['old_photo'])&&$_POST['oldphoto']!="nophoto.png"){@unlink("../images/(".$_POST['oldphoto'].")");}
            $Filename_TMP=$_FILES['newphoto']['tmp_name'];
            $Filename=time().$_FILES['newphoto']['name'];
            move_uploaded_file("$Filename_TMP","../images/$Filename");
            $query_update="Update smarty.items set meta_title='".$_POST['meta_title']."',meta_keyword='".$_POST['meta_keyword']."',meta_descript='".$_POST['meta_descript']."',name='".$_POST['name']."',har='".$_POST['har']."',price='".$_POST['price']."',count='".$_POST['count']."',photo='$Filename',id_cat='".$_POST['id_cat_new']."' WHERE id=".$_POST['id'];
        }
        else {
            $query_update="Update smarty.items set meta_title='".$_POST['meta_title']."',meta_keyword='".$_POST['meta_keyword']."',meta_descript='".$_POST['meta_descript']."',name='".$_POST['name']."',har='".$_POST['har']."',price='".$_POST['price']."',count='".$_POST['count']."',id_cat='".$_POST['id_cat_new']."' WHERE id=".$_POST['id'];
        }
$rezult_update=mysqli_query($abc,$query_update)or die("Query update error");
$content="Успешно отредактировано";
    }
    else
    {
        $content="Редактирование отменено или присутствуют пустые поля";
    }
    $smarty_main->assign("content",$content);
$smarty_main->display("main.tpl");}
else{header("location:404.html");}
?>