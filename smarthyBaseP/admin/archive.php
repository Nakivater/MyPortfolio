<?php
require_once("header.php");
if(isset($_SESSION['userid'])&&isset($_SESSION['username'])&&isset($_SESSION['useravatar'])) {
$archive=new Smarty();
$stoimost=1;
$smena=0;
$final=0;
$stroka=1;
$query="Select Client.name as name_cl,tel,email,prim,id_client,count_zakaz,status,data_zk,items.name as name_it,price,photo FROM Client 
INNER JOIN relation on relation.id_client=Client.id INNER JOIN items on items.id=relation.id_tovar Where Status=1 order by data_zk DESC, id_client desc";
$rezult=mysqli_query($abc,$query)or die("Query error");
$archive_ar=array();
while ($next=mysqli_fetch_array($rezult))
{if(empty($next['photo'])){$next['photo']='nophoto.png';}
    $stoimost=$next['price']*$next['count_zakaz'];
if($smena!=$next['id_client']){
    $final=0;
    $stroka=1;
    $query_str="Select id_tovar from smarty.relation WHERE id_client=".$next['id_client'];
    $rezult_str=mysqli_query($abc,$query_str)or die("Query str error");
    $count_str=mysqli_num_rows($rezult_str);
}
$final+=$stoimost;
    $archive_ar[]=array("stroka"=>$stroka,"smena"=>$smena,"id_client"=>$next['id_client'],"final"=>$final,"str"=>$count_str,"stoimost"=>$stoimost,"name_cl"=>$next['name_cl'],"tel"=>$next['tel'],"email"=>$next['email'],"prim"=>$next['prim'],"count_zakaz"=>$next['count_zakaz'],"status"=>$next['status'],"data_zk"=>$next['data_zk'],"name_it"=>$next['name_it'],"price"=>$next['price'],"photo"=>$next['photo']);
if($smena!=$next['id_client']){$smena=$next['id_client'];}
if($stroka==$count_str){$stoimost=0;}
$stroka++;
}
$archive->assign("num",1);
$archive->assign("archive",$archive_ar);
$content=$archive->fetch("archive.tpl");
$smarty_main->assign("content",$content);
$smarty_main->display("main.tpl");
}else{header("location:404.html");}