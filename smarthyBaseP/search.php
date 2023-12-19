<?php
require_once ("header.php");
$page="katalog";
$smarty_search=new Smarty();
$query="Select id,name,har,price,count,photo,id_cat from smarty.items";
////////////////////////////////////////////////////
if(isset($_GET['search'])&&!empty($_GET['search']))
{
    $search1=$_GET['search'];
$search=str_replace(","," ",$search1);
$word=explode(" ",$search);
}
//print_r($word);
$final_words=array();
if(count($word)>0)
{
    foreach($word as $tmp)
    {
        if(!empty($tmp))
        {
            $final_words[]=$tmp;
        }
    }
}
//print_r($final_words);
$rez_word=array();
if(count($final_words)>0)
{
    foreach ($final_words as $tmp)
    {
        $rez_word[]=" name like '%".$tmp."%'";
    }
}
//print_r($rez_word);
$rezult_WHERE=implode(" OR ",$rez_word);
if(!empty($rezult_WHERE)) {$query.=" WHERE $rezult_WHERE";}
///////////////////////////////////////////////////
    //echo"$query";
$rezult=mysqli_query($abc,$query)or die("Query error");
$items_s=array();
$sum=1;
while($next=mysqli_fetch_array($rezult))
{
    if(empty($next['photo'])){$next['photo']='nophoto.png';}
 $items_s[]=array("sum"=>$sum,"id"=>$next['id'],"name"=>$next['name'],"price"=>$next['price'],"har"=>$next['har'],"count"=>$next['price'],"photo"=>$next['photo'],"id_cat"=>$next['id_cat']);
$sum++;
}
//print_r($items_s);
$smarty_search->assign("items",$items_s);
$content=$smarty_search->fetch("search.tpl");
////////////////////////////////////////////////////
require_once ("main.php");