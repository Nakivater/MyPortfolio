<?php
session_start();
if (isset($_GET['id']) && !empty($_GET['id']) && isset($_GET['mode']) && $_GET['mode'] == "add") {
    $exist = false;
    if (!isset($_SESSION['items'])) {
        $_SESSION['items'] = array();
    }
    if (count($_SESSION['items']) > 0) {
        for ($i = 0; $i < count($_SESSION['items']); $i++) {
            if ($_SESSION['items'][$i]['id'] == $_GET['id']) {
                $exist = true;
                $_SESSION['items'][$i]['count']++;
                break;
            }
        }
    }
    if(!$exist)
    {
        require_once("admin/param.php");
        $query="Select name,photo,price from smarty.items WHERE id=".$_GET['id'];
        $rezult=mysqli_query($abc,$query)or die("Query error");
        $next=mysqli_fetch_array($rezult);
if(empty($next['photo'])){$next['photo']='nophoto.png';}
$_SESSION['items'][]=array("id"=>$_GET['id'],"name"=>$next['name'],"price"=>$next['price'],"photo"=>$next['photo'],"count"=>1);
    }
}
if(isset($_GET['mode'])&&$_GET['mode']=="clear")
{
unset($_SESSION['items']);
$_SESSION['items']=array();
}
if(isset($_GET['id'])&&!empty($_GET['id'])&&isset($_GET['mode'])&&$_GET['mode']=="dell")
{
    for($i=0;$i<count($_SESSION['items']);$i++)
    {
        if($_SESSION['items'][$i]['id']==$_GET['id']) {
        unset($_SESSION['items'][$i]);
        break;}
    }
}
$items=array();
foreach ($_SESSION['items'] as $tmp)
{
if(!empty($tmp))
{
 $items[]=$tmp;
}
}
unset($_SESSION['items']);
$_SESSION['items']=array();
$_SESSION['items']=$items;
unset($items);
if(isset($_GET['script'])&&$_GET['script']=="order"&& count($_SESSION['items'])>0)
{
    header("location:order.php");
}
else
{
 if(isset($_GET['page']))
 {
$page=$_GET['page'];
if(isset($_GET['id_cat'])&&isset($_GET['page']))
{
    header("location:katalog.php?page=$page&id_cat=".$_GET['id_cat']."");
}
else{header("location:katalog.php?page=$page");}
 }
 else{header("location:katalog.php");}
}
?>