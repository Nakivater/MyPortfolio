 <?php
 session_start();
 if(isset($_GET['id'])&&!empty($_GET['id'])&&isset($_GET['mode'])&&$_GET['mode']=="add")    {//Когда нажата ссылка купить в каталоге. Мы получаем id товара коорый хочет купить пользователь и режим роботы корзины mode который содержит стороку add что значит добавить товар в корзину
     $exist = false;//Статусная переменная хранит false если данного товара нет в корзине
     if (!isset($_SESSION['items'])) {//Если корзина не существует, то создаём её пустым динамическим массивом
         $_SESSION['items'] = array();//Динамический массив.Пустой
     }
     if (count($_SESSION['items']) > 0)//Есои коичество товаров в корзине >  0.
     {
         for($i=0;$i<count($_SESSION['items']);$i++)//Перебераем товары в корзине
         {
             if($_SESSION['items'][$i]['id']==$_GET['id'])//и пытаемся найти товар с соответствуйщем id который получаем по ссылке.
             {
                 $exist=true;//усли товар наден то статусная переменная храгит true таким образом мы понимаем что товар найден
                 $_SESSION['items'][$i]['kolvo']++;//Увеличиваем количество найденого товара на 1.
             break;//Останавоиваем работу цикла.
             }
         }
     }
     if(!$exist)//Если переменная не изменила свой статус, то есть =false, а это значи что данного типа товара в козине нет, и мы должны добавить первый екземпляр.
     {
         require_once("admin/param.php");
         $query="Select name,photo,price from Korzina.items WHERE id=".$_GET['id'];
         $rezult=mysqli_query($abc,$query)or die("Query error");
         $next=mysqli_fetch_array($rezult);
         $photo=$next['photo'];
         if(empty($photo))
         {$photo='nophoto.png';}
         $_SESSION['items'][]=array("id"=>$_GET['id'],"photo"=>$photo,"name"=>$next['name'],"price"=>$next['price'],"kolvo"=>1);//В козину новым елементом добавляем массив полей конкретного типа товаров.
     }
 }
if(isset($_GET['mode'])&&$_GET['mode']=="clear")//УСли существует mode and mode==clear то это значит что пользователь хочет очистить данную корзину.
{
 unset($_SESSION['items']);//Функция unset полностью уничтожает выбраную переменную или массив. Такая операция называется разименованием.
 $_SESSION['items']=array();//Заново создаём массив корзины для добавления новых данных.
}
if(isset($_GET['id'])&&!empty($_GET['id'])&&isset($_GET['mode'])&&$_GET['mode']=="dell")
{
    for($i=0;$i<count($_SESSION['items']);$i++)
    {
        if($_SESSION['items'][$i]['id']==$_GET['id'])
        {
            unset($_SESSION['items'][$i]);//unset удаляем конкертный тип товара 1 елемент массива.
            break;
        }
    }
    ////////Код ниже поправляет индексы в корзине после удаления одного типа товаров.
    $items=array();//Создаие пучтого динамического массива куда перекопируем оставшиеся елементи другого массива
    foreach($_SESSION['items'] as $tmp)//Перебираем корзину циклом foreach так как он не привязан к id.
    {
        if(!empty($tmp))//Усли не пустой то добавляем в новосозданный массив.
        {
            $items[]=$tmp;
        }
    }
    unset($_SESSION['items']);//Удаляем корзину
    $_SESSION['items']=array();//Создаем новый массив
    $_SESSION['items']=$items;//Перекопируем из старого в новый
    unset($items);//Удаляем вспомогательный массив.
}
if(isset($_GET['skript'])&&$_GET['skript']=="order") {
     header("location:order.php");
}
else {

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    if(isset($_GET['idc'])&&isset($_GET['page']))
    {$idc=$_GET['idc'];
    header("location:catalog.php?page=$page&idc=$idc");}
    else
    {header("location:catalog.php?page=$page");}
    } else {
        header("location:catalog.php");
    }
}
//print_r($_SESSION['items']);
 ?>