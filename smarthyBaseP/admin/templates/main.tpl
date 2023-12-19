<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="style_for_index.css" rel="stylesheet">
</head>
<body>
<header><h1>Админ часть</h1></header>
<div id="menu">
<h2>Меню</h2>
    <ul>
        <li><a href="index_page.php">Управление страницами</a></li>
        <li><a href="add_categories.php">Добавить категорию</a></li>
        <li><a href="index_cat.php">Управление существующеми категориями</a></li>
        <li><a href="add_items.php">Добавить товар</a></li>
        <li><a href="index_items.php">Управление товарами</a></li>
        <li><a href="zakaz.php">Управление заказами</a></li>
        <li><a href="archive.php">Архив</a></li>
        <li><a href="exit.php">Выход</a> </li>
    </ul>
</div>
<div id="content">
    {$content}
</div>
<div id="footer">
    &copy;Разработчик
</div>

</body>
</html>