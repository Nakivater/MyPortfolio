<?php
/* Smarty version 3.1.33, created on 2019-03-23 19:11:59
  from 'E:\OpenServer\domains\smarthy\admin\templates\login_aployments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c965acfb1bb53_67054605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb4952f93ad4c52c5336220ec6a0bbc30acbc2cd' => 
    array (
      0 => 'E:\\OpenServer\\domains\\smarthy\\admin\\templates\\login_aployments.tpl',
      1 => 1553357518,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c965acfb1bb53_67054605 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="login_aployments.php" enctype="multipart/form-data" method="post">
    <input type="text" name="login" placeholder="Введите ваш логин"><br>
    <input type="password" name="password" placeholder="Введите ваш пароль"><br>
    <input type="submit" name="send" value="Отправить"><br>
</form>
<?php }
}
