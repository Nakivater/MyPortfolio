<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$sum=0;
$arr=array(1.3,2,11,24,25,3);
for($i=0;$i<count($arr);$i++)
{
    echo $arr[$i]."<br>";
    $sum+=$arr[$i];
}
echo"$sum<br>";
?>
</body>
</html>