<?php
/* Smarty version 3.1.33, created on 2019-03-22 21:03:11
  from 'E:\OpenServer\domains\smarthy\admin\templates\index_items.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c95235f71e9b4_76966702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3273463ea3dbb6fb157861171039fb08567ac01' => 
    array (
      0 => 'E:\\OpenServer\\domains\\smarthy\\admin\\templates\\index_items.tpl',
      1 => 1553277790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c95235f71e9b4_76966702 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h4>Управление товарами</h4>
<table border="2">
    <tr>
        <th>№</th>
        <th>Фото</th>
        <th>Название</th>
        <th>Редактировать</th>
        <th>Удалить</th>
    </tr>
    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['pages_items']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>

        <tr>
            <th><?php echo $_smarty_tpl->tpl_vars['pages_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['sum'];?>
</th>
            <th><img src="../images/<?php echo $_smarty_tpl->tpl_vars['pages_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo'];?>
"></th>
            <th><?php echo $_smarty_tpl->tpl_vars['pages_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</th>
            <th><a href="update_items.php?id=<?php echo $_smarty_tpl->tpl_vars['pages_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">Редактировать</a></th>
            <th><a href="delete_items.php?id=<?php echo $_smarty_tpl->tpl_vars['pages_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&&name=<?php echo $_smarty_tpl->tpl_vars['pages_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
">Удалить</a></th>
        </tr>
    <?php
}
}
?>
</table>
<div class="myclass">
    <p>Добро пожаловать <?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</p>
    <p><img src="../images/<?php echo $_smarty_tpl->tpl_vars['user_avatar']->value;?>
" width="50px"></p>
</div><?php }
}
