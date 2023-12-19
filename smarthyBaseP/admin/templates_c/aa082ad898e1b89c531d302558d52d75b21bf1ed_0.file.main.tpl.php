<?php
/* Smarty version 3.1.33, created on 2019-04-16 12:05:48
  from 'E:\OpenServer\domains\smarthy\admin\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb59aec135bf4_00291320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa082ad898e1b89c531d302558d52d75b21bf1ed' => 
    array (
      0 => 'E:\\OpenServer\\domains\\smarthy\\admin\\templates\\main.tpl',
      1 => 1555405546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb59aec135bf4_00291320 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
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
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div>
<div id="footer">
    &copy;Разработчик
</div>

</body>
</html><?php }
}
