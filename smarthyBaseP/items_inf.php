<?php
require_once ("header.php");
$page="items_inf";
$smarty_items_inf=new Smarty();
if(isset($_GET['id'])&&!empty($_GET['id']))
{
    $query="Select meta_title,meta_keyword,meta_descript,name,har,price,count,photo,id_cat from smarty.items WHERE id=".$_GET['id'];
    $rezult=mysqli_query($abc,$query)or die("Query error");
    $next=mysqli_fetch_array($rezult);
    $smarty_items_inf->assign("meta_title",$next['meta_title']);
    $smarty_items_inf->assign("meta_keyword",$next['meta_keyword']);
    $smarty_items_inf->assign("meta_descript",$next['meta_descript']);
    $smarty_items_inf->assign("name",$next['name']);
    $smarty_items_inf->assign("har",$next['har']);
    $smarty_items_inf->assign("price",$next['price']);
    $smarty_items_inf->assign("count",$next['count']);
    $smarty_items_inf->assign("id_cat",$next['id_cat']);
    $smarty_items_inf->assign("id",$next['id']);
    if(empty($next['photo'])){$next['photo']='nopohoto.png';}
    $smarty_items_inf->assign("photo",$next['photo']);
    $content=$smarty_items_inf->fetch("items_inf.tpl");
    require_once ("main.php");
}
else
{
    $content="Произошла ошибка";
}
