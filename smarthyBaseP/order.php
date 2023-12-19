<?php
session_start();
$page="order";
require_once ("header.php");
if(isset($_SESSION['items'])&&count($_SESSION['items'])>0)
{
    $order=new Smarty();
if(isset($_POST['per']))
{
    for($i=0;$i<count($_SESSION['items']);$i++)
    {
     $nameElement="count".$_SESSION['items'][$i]['id'];
$_SESSION['items'][$i]['count']=$_POST["$nameElement"];
    }
}
$totalsum=0;
$order_i=array();
foreach ($_SESSION['items'] as $tmp)
{
$query="Select count from smarty.items WHERE id=".$tmp['id'];
$rezult=mysqli_query($abc,$query)or die("Query error");
$next=mysqli_fetch_array($rezult);
    $stoimost=$tmp['price']*$tmp['count'];
    $totalsum=$totalsum+$stoimost;
    $order_i[]=array("max"=>$next['count'],"photo"=>$tmp['photo'],"count"=>$tmp['count'],"name"=>$tmp['name'],"price"=>$tmp['price'],"id"=>$tmp['id'],"stoimost"=>$stoimost);
}
//print_r($order_i);
    $order->assign("totalsum",$totalsum);
$order->assign("sum",1);
$order->assign("order_i",$order_i);
$content=$order->fetch("order.tpl");
}
else
{
    $content="Корзина пуста";
}
require_once ("main.php");
mysqli_close($abc);
?>

