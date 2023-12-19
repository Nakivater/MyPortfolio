<?php
if(isset($_GET['id'])&&!empty($_GET['id']))
{
    $id=$_GET['id'];
    $query="Delete from Korzina.relation WHERE id_Klient=".$_GET['id'];
    require_once("param.php");
    $rezult=mysqli_query($abc,$query)or die("Query error");
    echo"Удаление успешно";
}
else
{
    echo"Удаление невозможно";
}
?>