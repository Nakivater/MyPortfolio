<?php
/* Smarty version 3.1.33, created on 2019-03-22 22:54:04
  from 'E:\OpenServer\domains\smarthy\templates\items_inf.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c953d5c1fedd0_13480843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9297917c89591c0d7e3ebd0c66f0212a1af90ec9' => 
    array (
      0 => 'E:\\OpenServer\\domains\\smarthy\\templates\\items_inf.tpl',
      1 => 1553284422,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c953d5c1fedd0_13480843 (Smarty_Internal_Template $_smarty_tpl) {
?><h6>Информация о товаре</h6>
<table border="2"><tr>
        <th>Фото</th>
        <th>Название</th>
        <th>Цена</th>
        <th>Количество</th>
        <th>Характеристика</th>
        <th>Категория</th>
    </tr>
<tr>
    <th><img src="images/<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
" width="50px"></th>
    <th><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</th>
    <th><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
</th>
    <th><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</th>
    <th><?php echo $_smarty_tpl->tpl_vars['har']->value;?>
</th>
    <th><?php echo $_smarty_tpl->tpl_vars['id_cat']->value;?>
</th>
</tr>
</table>
<?php }
}
