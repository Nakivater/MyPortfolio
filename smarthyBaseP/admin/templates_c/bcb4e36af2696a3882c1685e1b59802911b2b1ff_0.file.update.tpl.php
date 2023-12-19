<?php
/* Smarty version 3.1.33, created on 2019-03-23 13:02:08
  from 'E:\OpenServer\domains\smarthy\admin\templates\update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c9604200e5d51_24897937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcb4e36af2696a3882c1685e1b59802911b2b1ff' => 
    array (
      0 => 'E:\\OpenServer\\domains\\smarthy\\admin\\templates\\update.tpl',
      1 => 1553335223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9604200e5d51_24897937 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Редактирование</h2>
<form action="update.php" method="post" enctype="multipart/form-data">
    <p>Отредактировать meta_title</p>
    <textarea name="meta_title"><?php echo $_smarty_tpl->tpl_vars['meta_title']->value;?>
</textarea>
    <p>Отредактировать meta_keyword</p>
    <textarea name="meta_keyword"><?php echo $_smarty_tpl->tpl_vars['meta_keyword']->value;?>
</textarea>
    <p>Отредактировать meta_descript</p>
    <textarea name="meta_descript"><?php echo $_smarty_tpl->tpl_vars['meta_descript']->value;?>
</textarea>
    <p>Отредактируйте название страницы</p>
    <input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
">
    <p>Отредактируйте контент</p>
    <textarea name="content"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
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
</div>
<?php }
}
