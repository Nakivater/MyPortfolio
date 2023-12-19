<?php
require_once ("header.php");
if(isset($_GET['id'])&&!empty($_GET['id']))
{
    $query="Update smarty.relation set status=1 WHERE id_client=".$_GET['id'];
    //echo"$query";
$rezult=mysqli_query($abc,$query)or die("Query error");
$query1="Select id_tovar,count_zakaz from smarty.relation WHERE id_client=".$_GET['id'];
$rezult1=mysqli_query($abc,$query1)or die("Query update error");
while($next=mysqli_fetch_array($rezult1))
{
    $query2="Update smarty.items set count=count-".$next['count_zakaz']." WHERE id=".$next['id_tovar'];
    mysqli_query($abc,$query2)or die("Query count error");
}
}
header("location:zakaz.php");
?>