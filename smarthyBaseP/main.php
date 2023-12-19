<?php
/*define("SMARTY_LIB","libs/");//Конмтанта которая хранит путь к Smarty библилтеке.
require_once (SMARTY_LIB."Smarty.class.php");//Подклчаем основной файл библиотеки Smarty.
require_once ("admin/param.php");*/
//$smarty_main=new Smarty();//Создание Smarty обьэкт который будет обслуживать ф    айл main.tpl.
/*$smarty_main->assign("privet","Привет smarty");//Метод assign Выполняет подстаноку данных  в tpl файл в указаное мсто {$privet}.Метод имеет параметры название метода пос=дстановеи.2) Значение которое будет подставлено.
$bal=4;
$smarty_main->assign("bal",$bal);*/
//Движок для вывода любой страницы.
//$page="index";

if(isset($page)) {
    /////////////////////////Корзина
    //print_r($_SESSION['items']);
    if(isset($_SESSION['items'])&&count($_SESSION['items'])>0&&$page!="order")
    {
        $korzina=array();
        $totalsum=0;
        foreach ($_SESSION['items'] as $tmp)
        {
            if(empty($tmp['photo'])){$tmp['photo']='nophoto';}
            $stoimost=$tmp['price']*$tmp['count'];
            $totalsum=$totalsum+$stoimost;
            $korzina[]=array("count"=>$tmp['count'],"price"=>$tmp['price'],"name"=>$tmp['name'],"stoimost"=>$stoimost,"photo"=>$tmp['photo'],"id"=>$tmp['id']);
        }
        $smarty_main->assign("totalsum",$totalsum);
        $smarty_main->assign("counter",1);
        $smarty_main->assign("korzina",$korzina);
        //print_r($korzina);
    }
    /////////////////////////
    $query = "Select meta_title,meta_keyword,meta_descript,title,content from smarty.setting WHERE page='$page'";
    //echo"$query";
    $rezult = mysqli_query($abc, $query) or die("Query error");
    $next = mysqli_fetch_array($rezult);
    $smarty_main->assign("meta_title", $next['meta_title']);
    $smarty_main->assign("meta_keyword", $next['meta_keyword']);
    $smarty_main->assign("meta_description", $next['meta_descript']);
    $smarty_main->assign("title", $next['title']);
    //////////////////Категории для вывода
$cat=array();
    $query_cat="Select id,name_cat from smarty.categories";
$rezult_cat=mysqli_query($abc,$query_cat)or die("Query categories error");
while($next_cat=mysqli_fetch_array($rezult_cat))
{
    $cat[]=array("id"=>$next_cat['id'],"name"=>$next_cat['name_cat']);
}
$smarty_main->assign("cat",$cat);
    //////////////////
    if(isset($content))
    {
     $smarty_main->assign("content",$content);
    }
    else{
    $smarty_main->assign("content", $next['content']);}

//Создание меню.
    $query_menu="Select name,page from smarty.setting order by print ASC";
    $rezult_menu=mysqli_query($abc,$query_menu)or die("Query error");
    $menu=array();
    While($next_Menu=mysqli_fetch_array($rezult_menu))
    {
        $menu[]=array("name"=>$next_Menu['name'],"page"=>$next_Menu['page']);
    }
    $smarty_main->assign("menu",$menu);
    //
    $smarty_main->display("main.tpl");//Команда компилации php и tpl файла и скомпилиованый файл будет передаваться браузеру.
}
else
{
    echo"<a href='index.php'>Перейти</a>";
}
    ?>