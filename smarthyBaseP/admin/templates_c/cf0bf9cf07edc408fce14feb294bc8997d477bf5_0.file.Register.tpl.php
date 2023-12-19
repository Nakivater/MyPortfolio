<?php
/* Smarty version 3.1.33, created on 2019-05-10 20:46:06
  from 'E:\OpenServer\domains\smarthy\admin\templates\Register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd5b8de2b7cd2_07561689',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf0bf9cf07edc408fce14feb294bc8997d477bf5' => 
    array (
      0 => 'E:\\OpenServer\\domains\\smarthy\\admin\\templates\\Register.tpl',
      1 => 1553335444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd5b8de2b7cd2_07561689 (Smarty_Internal_Template $_smarty_tpl) {
?><h6>Приветствуем новый сотрудник!<br>Пройдите регистрацию для начала работы</h6>
<form enctype="multipart/form-data" action="Register.php" method="post"><br>
    <input type="text" name="name" placeholder="Введите ФИО"><br>
    <p>Выберите аватар</p><input type="file" name="avatar"><br>
    <input type="text" name="login" placeholder="Введите логин"><br>
    <input type="password" name="password" placeholder="Введите пароль"><br>
    <input type="password" name="password1" placeholder="Повторите ввод пароля"><br>
    <input type="submit" name="send" value="Зарегестрироваться"><br>
</form>
<?php }
}
