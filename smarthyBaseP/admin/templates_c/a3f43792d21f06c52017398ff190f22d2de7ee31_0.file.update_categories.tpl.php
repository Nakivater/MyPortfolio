<?php
/* Smarty version 3.1.33, created on 2019-03-23 13:06:21
  from 'E:\OpenServer\domains\smarthy\admin\templates\update_categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c96051d7f5e50_44445022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3f43792d21f06c52017398ff190f22d2de7ee31' => 
    array (
      0 => 'E:\\OpenServer\\domains\\smarthy\\admin\\templates\\update_categories.tpl',
      1 => 1553335223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c96051d7f5e50_44445022 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Отредактируйте категорию</h1>
<form action="update_categories.php" method="post" enctype="multipart/form-data">
    <textarea name="name_cat"><?php echo $_smarty_tpl->tpl_vars['name_cat']->value;?>
</textarea>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
<input type="submit" name="send" value="Отредактировать">
</form>
<div class="myclass">
    <p>Добро пожаловать <?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</p>
    <p><img src="../images/<?php echo $_smarty_tpl->tpl_vars['user_avatar']->value;?>
" width="50px"></p>
</div><?php }
}
