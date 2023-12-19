<?php
/* Smarty version 3.1.33, created on 2019-03-23 13:06:19
  from 'E:\OpenServer\domains\smarthy\admin\templates\delete_categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c96051b348c12_57953532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fefbf8cc4d41f33ce7d47feed0bd650c1e04a1d' => 
    array (
      0 => 'E:\\OpenServer\\domains\\smarthy\\admin\\templates\\delete_categories.tpl',
      1 => 1553335223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c96051b348c12_57953532 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="f1">


<h2>Вы действительно хотите удалить категорию <?php echo $_smarty_tpl->tpl_vars['name_cat']->value;?>
?</h2>
    <form method="post" enctype="multipart/form-data" action="delete_categories.php">
        <input type="radio" name="del" checked value="yes">Да
        <input type="radio" name="del" value="no">Нет
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><br>
        <input type="submit" name="send" value="Удалить">
    </form>
</div>
<div class="myclass">
    <p>Добро пожаловать <?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</p>
    <p><img src="../images/<?php echo $_smarty_tpl->tpl_vars['user_avatar']->value;?>
" width="50px"></p>
</div><?php }
}
