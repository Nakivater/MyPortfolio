<?php
/* Smarty version 3.1.33, created on 2019-04-12 20:44:34
  from 'E:\OpenServer\domains\smarthy\admin\templates\zakaz.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb0ce821d9247_25724169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1b07482c1677b3e0366656ee2436637c0b2a4da' => 
    array (
      0 => 'E:\\OpenServer\\domains\\smarthy\\admin\\templates\\zakaz.tpl',
      1 => 1555091073,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb0ce821d9247_25724169 (Smarty_Internal_Template $_smarty_tpl) {
?><table border="1">
    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['zakaz']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <?php if ($_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['smena'] != $_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_client']) {?>
        <tr>
            <th>№</th>
            <th>ФИО</th>
            <th>Телефон</th>
            <th>Email</th>
            <th>Примечания</th>
            <th>Дата заказов</th>
            <th><a href="run_zakaz.php?id=<?php echo $_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_client'];?>
">Выполнить</a></th>
            <th><a href="del_zakaz.php?id=<?php echo $_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_client'];?>
">Удалить</a></th>
        </tr>
        <tr>
            <th><?php echo $_smarty_tpl->tpl_vars['num']->value++;?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name_client'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tel'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['email'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['prim'];?>
</th>
            <th colspan="3"><?php echo $_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['data_zk'];?>
</th>
            </tr>

        <tr>
            <th>Фото</th>
            <th>Название товара</th>
            <th>Цена</th>
            <th>Количество заказов</th>
            <th colspan="4">Стоимость</th>
        </tr>
        <?php }?>
        <tr>
            <th><img src="../../images/<?php echo $_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo'];?>
"></th>
            <th><?php echo $_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name_it'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['count_zakaz'];?>
</th>
            <th colspan="4"><?php echo $_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['stoimost'];?>
</th>
        </tr>
        <?php if ($_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['stroka'] == $_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['str']) {?>
        <tr><th colspan="4">Итого</th><th colspan="4"><?php echo $_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['final'];?>
</th></tr>
        <?php }?>
    <?php
}
}
?>
</table><?php }
}
