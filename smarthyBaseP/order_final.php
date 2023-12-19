<?php
$page="order";
require_once ("header.php");
$order_final=new Smarty();
if(isset($_SESSION['items']))
{
    $order=array();
    if(!isset($_POST['send'])) {
        $totalsum = 0;
        foreach ($_SESSION['items'] as $tmp) {
            $stoimost = $tmp['price'] * $tmp['count'];
            $totalsum = $totalsum + $stoimost;
            $order[] = array("stoimost" => $stoimost, "id" => $tmp['id'], "name" => $tmp['name'], "price" => $tmp['price'], "count" => $tmp['count'], "photo" => $tmp['photo'],);
        }
        $order_final->assign("totalsum", $totalsum);
        $order_final->assign("sum", 1);
        //print_r($order);
        $order_final->assign("order", $order);
    }
    else
        if(isset($_POST['send'])&&!empty($_POST['name'])&&!empty($_POST['tel'])&&!empty($_POST['email'])&&!empty($_POST['prim']))
        {
            $query="Insert into smarty.Client (name, tel, email, prim) VALUES ('".$_POST['name']."','".$_POST['tel']."','".$_POST['email']."','".$_POST['prim']."')";
            $rezult=mysqli_query($abc,$query)or die("Query error");
            $id_client=mysqli_insert_id($abc);
            $content="Ваши данные успешно добавлены";
            foreach ($_SESSION['items'] as $tmp)
            {
                $query_rel = "Insert into smarty.relation (id_client, id_tovar, count_zakaz, status, data_zk) VALUES ('$id_client','".$tmp['id']."','" .$tmp['count']."','1',now())";
                echo "$query_rel";
                $rezult_rel=mysqli_query($abc,$query_rel)or die("Query relation error");
            }
            unset($_SESSION['items']);
            $_SESSION['items']=array();
            header("location:katalog.php");
            }
        else
        {
            $content="Недостаточно данных для заказа";
        }

    $content=$order_final->fetch("order_final.tpl");

}
else
{
$content="Товары не заказаны";
}
require_once ("main.php");

