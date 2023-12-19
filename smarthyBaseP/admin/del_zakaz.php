<?php
if(isset($_GET['id'])&&!empty($_GET['id']))
{
    require_once ("param.php");
    $query="Delete from smarty.relation WHERE id_client=".$_GET['id'];
    $rezult=mysqli_query($abc,$query)or die("Query error");
    header("location:zakaz.php");
}