<?php
/* Smarty version 3.1.33, created on 2019-04-05 20:35:36
  from 'E:\OpenServer\domains\smarthy\templates\order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca791e82397a9_88167281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ccef0319889dd2f7bf9975908a91a6a269afead' => 
    array (
      0 => 'E:\\OpenServer\\domains\\smarthy\\templates\\order.tpl',
      1 => 1554485019,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca791e82397a9_88167281 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="order.php" method="post">
<table border="1">
    <tr>
        <th>№</th>
        <th>Фото</th>
        <th>Название</th>
        <th>Цена</th>
        <th>Количество</th>
        <th>Стоимость</th>
        <th> X </th>
    </tr>
    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['order_i']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
    <tr>
        <th><?php echo $_smarty_tpl->tpl_vars['sum']->value++;?>
</th>
        <th><img src="../images/<?php echo $_smarty_tpl->tpl_vars['order_i']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo'];?>
" width="50px"></th>
        <th><?php echo $_smarty_tpl->tpl_vars['order_i']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['order_i']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'];?>
</th>
        <th><input type="number" min="1" max="<?php echo $_smarty_tpl->tpl_vars['order_i']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['max'];?>
" name="count<?php echo $_smarty_tpl->tpl_vars['order_i']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['order_i']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['count'];?>
"></th>
        <th><?php echo $_smarty_tpl->tpl_vars['order_i']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['stoimost'];?>
</th>
        <th><a href="Korzina.php?id=<?php echo $_smarty_tpl->tpl_vars['order_i']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&mode=dell&script=order"> X </a></th>
    </tr>
    <?php
}
}
?>
    <tr>
        <th colspan="5">Итого</th>
        <th colspan="2"><?php echo $_smarty_tpl->tpl_vars['totalsum']->value;?>
</th>
    </tr>
    <tr>
        <th colspan="5"><a href="order_final.php">Заказать</a></th>
        <th colspan="2"><a href="Korzina.php?mode=clear" >Очистить</a></th></tr>
    <tr><th colspan="7"><input type="submit" name="per" value="Пересчитать"></th></tr>
</table>
</form><?php }
}
