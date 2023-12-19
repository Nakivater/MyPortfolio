<?php
if(isset($_GET['id'])&&!empty($_GET['id']))
{
    require_once ("param.php");
    $query="Update smarty.relation set status=0 WHERE id_client=".$_GET['id'];
$rezult=mysqli_query($abc,$query)or die("Query error");
$query1="Select id_tovar,count_zakaz from smarty.relation WHERE id_client=".$_GET['id'];
$rezult1=mysqli_query($abc,$query1)or die("Fatal error");
while($next=mysqli_fetch_array($rezult1))
{
    $query2="Update smarty.items set count=count+".$next['count_zakaz']." WHERE id=".$next['id_tovar'];
    echo"$query2";
mysqli_query($abc,$query2)or die("Fatal fatal error");
}
}
header("location:zakaz.php");