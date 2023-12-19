<?php
/* Smarty version 3.1.33, created on 2019-03-23 13:00:28
  from 'E:\OpenServer\domains\smarthy\admin\templates\add_categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c9603bca042c7_26685947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81dd77071c79c746dfcebf648fb38ba1d850746e' => 
    array (
      0 => 'E:\\OpenServer\\domains\\smarthy\\admin\\templates\\add_categories.tpl',
      1 => 1553335223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9603bca042c7_26685947 (Smarty_Internal_Template $_smarty_tpl) {
?><form enctype="multipart/form-data" action="add_categories.php" method="post">
    <input name="name_cat" type="text" placeholder="Введите название категории">
    <input type="submit" name="send" value="Создать">
</form>
<div class="myclass">
    <p>Добро пожаловать <?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</p>
    <p><img src="../images/<?php echo $_smarty_tpl->tpl_vars['user_avatar']->value;?>
" width="50px"></p>
</div><?php }
}
