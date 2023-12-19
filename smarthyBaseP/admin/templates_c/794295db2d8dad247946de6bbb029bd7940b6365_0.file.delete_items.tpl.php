<?php
/* Smarty version 3.1.33, created on 2019-03-23 13:10:03
  from 'E:\OpenServer\domains\smarthy\admin\templates\delete_items.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c9605fbe3cc97_34838580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '794295db2d8dad247946de6bbb029bd7940b6365' => 
    array (
      0 => 'E:\\OpenServer\\domains\\smarthy\\admin\\templates\\delete_items.tpl',
      1 => 1553335223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9605fbe3cc97_34838580 (Smarty_Internal_Template $_smarty_tpl) {
?><link href="../style_for_index.css" rel="stylesheet">
<h4>Вы действительно хотите удалить <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
?</h4>
<form action="delete_items.php" method="post" enctype="multipart/form-data">
    <input type="radio" name="del" checked value="yes">Да
    <input type="radio" name="del" value="no">Нет
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <input type="submit" name="send" value="Удалить">
</form>
<div class="myclass">
    <p>Добро пожаловать <?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</p>
    <p><img src="../images/<?php echo $_smarty_tpl->tpl_vars['user_avatar']->value;?>
" width="50px"></p>
</div><?php }
}
