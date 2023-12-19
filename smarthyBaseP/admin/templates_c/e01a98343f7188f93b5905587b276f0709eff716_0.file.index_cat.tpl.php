<?php
/* Smarty version 3.1.33, created on 2019-03-22 20:59:12
  from 'E:\OpenServer\domains\smarthy\admin\templates\index_cat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c952270619ee6_51157273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e01a98343f7188f93b5905587b276f0709eff716' => 
    array (
      0 => 'E:\\OpenServer\\domains\\smarthy\\admin\\templates\\index_cat.tpl',
      1 => 1553277551,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c952270619ee6_51157273 (Smarty_Internal_Template $_smarty_tpl) {
?><link href="style_for_index.css" rel="stylesheet">
<h2>Форматирование категорий</h2>
<table border="2">
    <tr>
    <th>№</th>
    <th>Название</th>
    <th>Редактировать</th>
    <th>Удалить</th>
    </tr>
        <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['pages_cat']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['pages_cat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['pages_cat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name_cat'];?>
</td>
        <td><a href="update_categories.php?id=<?php echo $_smarty_tpl->tpl_vars['pages_cat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">Редактировать</a></td>
        <td><a href="delete_categories.php?id=<?php echo $_smarty_tpl->tpl_vars['pages_cat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&&name_cat=<?php echo $_smarty_tpl->tpl_vars['pages_cat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name_cat'];?>
">Удалить</a></td>
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
