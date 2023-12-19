<?php
require_once ("header.php");
$page="katalog";
$smarty_catalog=new Smarty();
$pages_catalog=array();
$sum=1;
//////////////////Листалка
$zapis=4;
if(isset($_GET['id_cat'])){$query_list="Select id from smarty.items WHERE id_cat=".$_GET['id_cat'];}else{$query_list="Select id from smarty.items";}
        $rezult_list=mysqli_query($abc,$query_list)or die("Query list error");
$count_str=mysqli_num_rows($rezult_list);
$count_pages=ceil($count_str/$zapis);
if(isset($_GET['page']))
{$active_page=$_GET['page'];}
else{$active_page=1;}
$skip=($active_page-1)*$zapis;
$num=$skip+1;
$smarty_catalog->assign("num",$num);

$page_num=array();
for($i=1;$i<=$count_pages;$i++)
{
        $page_num[]=array("i"=>$i);
}
$smarty_catalog->assign("page_num",$page_num);
$smarty_catalog->assign("active_page",$active_page);
$smarty_catalog->assign("count_pages",$count_pages);
//////////////////
if(isset($_GET['id_cat'])){$query="Select id,meta_title,meta_keyword,meta_descript,name,har,photo,price,count,id_cat from smarty.items WHERE id_cat=".$_GET['id_cat']." limit $skip,$zapis";}
    else{$query="Select id,meta_title,meta_keyword,meta_descript,name,har,photo,price,count,id_cat from smarty.items limit $skip,$zapis";}
        //echo"$query";
     $rezult=mysqli_query($abc,$query)or die("Query categories error");
     while($next=mysqli_fetch_array($rezult))
     {
         if(empty($next['photo'])){$next['photo']='nophoto.png';}
         $pages_catalog[]=array("sum"=>$sum,"id"=>$next['id'],"meta_title"=>$next['meta_title'],"meta_keyword"=>$next['meta_keyword'],"meta_descript"=>$next['meta_descript'],"name"=>$next['name'],"har"=>$next['har'],
             "price"=>$next['price'],"count"=>$next['count'],"id_cat"=>$next['id_cat'],"photo"=>$next['photo']);
         $sum++;
     }
     $smarty_catalog->assign("idc",$_GET['id_cat']);
////////////////////
    $smarty_catalog->assign("pages_items",$pages_catalog);
$content=$smarty_catalog->fetch("catalog.tpl");
require_once ("main.php");
////////////////////