<?php
/* Smarty version 3.1.33, created on 2019-03-29 21:43:08
  from 'E:\OpenServer\domains\smarthy\templates\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c9e673c5927b2_83381265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff18f5d186a93618e3812a426dea68386cc505b5' => 
    array (
      0 => 'E:\\OpenServer\\domains\\smarthy\\templates\\search.tpl',
      1 => 1553884987,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9e673c5927b2_83381265 (Smarty_Internal_Template $_smarty_tpl) {
?><table border="1">
    <tr>
        <th>№</th>
        <th>Товар</th>
        <th>Характеристика</th>
        <th>Цена</th>
        <th>Количество</th>
        <th>Фото</th>
        <th>Категория</th>
    </tr>
    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['items']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <tr>
            <th><?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['sum'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['har'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['count'];?>
</th>
            <th><img src="images/<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo'];?>
" width="50px"></th>
            <th><?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_cat'];?>
</th>
        </tr>
    <?php
}
}
?>
</table><?php }
}
