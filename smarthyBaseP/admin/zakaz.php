<?php
require_once ("header.php");
if(isset($_SESSION['userid'])&&isset($_SESSION['username'])&&isset($_SESSION['useravatar'])) {
$smena=0;
$final=0;
$stroka=1;
$stoimost=1;
$zakaz=new Smarty();
$query="SELECT Client.name as name_client,tel,email,prim,count_zakaz,data_zk,count,items.name as name_it,price,photo,id_client FROM smarty.Client 
INNER JOIN relation on Client.id=relation.id_client  INNER JOIN items on relation.id_tovar=items.id WHERE status=0 ORDER by data_zk DESC,id_client DESC";
$rezult=mysqli_query($abc,$query)or die("Query error");
$zakaz_order=array();
while($next=mysqli_fetch_array($rezult)) {
    $stoimost=$next['price']*$next['count_zakaz'];
if($smena!=$next['id_client'])
{
    $final=0;
    $stroka=1;
    $query1="Select id_tovar from relation WHERE id_client=".$next['id_client'];
    $rezult1=mysqli_query($abc,$query1)or die("Quert str error");
    $count_str=mysqli_num_rows($rezult1);
}
    $final+=$stoimost;
if(empty($next['photo'])){$next['photo']='nophoto.png';}
    $zakaz_order[] = array("str"=>$count_str,"stroka"=>$stroka,"final"=>$final,"smena"=>$smena,"stoimost"=>$stoimost,"name_client" => $next['name_client'], "tel" => $next['tel'], "email" => $next['email'], "prim" => $next['prim'], "id_client" => $next['id_client'], "count_zakaz" => $next['count_zakaz'], "data_zk" => $next['data_zk'], "kol" => $next['kol'], "name_it" => $next['name_it'], "har" => $next['har'], "price" => $next['price'], "photo" => $next['photo'], "id_cat" => $next['id_cat']);
if($smena!=$next['id_client'])
{
$smena=$next['id_client'];
}
if($stroka==$count_str){$stoimost=0;}
$stroka++;
}
$zakaz->assign("num",1);
$zakaz->assign("zakaz", $zakaz_order);
//print_r($zakaz_order);
$content=$zakaz->fetch("zakaz.tpl");
$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");
}else{header("location:404.html");}