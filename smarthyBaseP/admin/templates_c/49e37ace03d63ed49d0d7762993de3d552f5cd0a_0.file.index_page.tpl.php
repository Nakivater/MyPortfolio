<?php
/* Smarty version 3.1.33, created on 2019-03-22 20:57:12
  from 'E:\OpenServer\domains\smarthy\admin\templates\index_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c9521f87f0be2_72342891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49e37ace03d63ed49d0d7762993de3d552f5cd0a' => 
    array (
      0 => 'E:\\OpenServer\\domains\\smarthy\\admin\\templates\\index_page.tpl',
      1 => 1553277431,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9521f87f0be2_72342891 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="../style_for_index.css">
<h2>Редактирование страниц</h2>
<table border="2px">
    <tr>
        <th>#</th>
        <th>Название</th>
        <th>Редактировать</th>
    </tr>
<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['pages']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</td>
        <td><a href="update.php?id=<?php echo $_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">Редактирование</a></td>
    </tr>
<?php
}
}
?>
</table>
    <div class="myclass">
            <p>Добро пожаловать <?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
!</p>
                <p><img src="../images/<?php echo $_smarty_tpl->tpl_vars['user_avatar']->value;?>
" width="50px"></p>
    </div>
<?php }
}
