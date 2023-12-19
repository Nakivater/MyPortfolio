<?php
/* Smarty version 3.1.33, created on 2019-04-09 20:40:58
  from 'E:\OpenServer\domains\smarthy\templates\order_final.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cacd92a2a11c3_94824804',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d008504f391f2cd15c4495eb1ec7af87ce59d46' => 
    array (
      0 => 'E:\\OpenServer\\domains\\smarthy\\templates\\order_final.tpl',
      1 => 1554831645,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cacd92a2a11c3_94824804 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="order_final.php" method="post">
    <input type="text" name="name" placeholder="Введите Ф.И.О."><br>
    <input type="text" name="tel" placeholder="Введите телефон"><br>
    <input type="text" name="email" placeholder="Введите email"><br>
    <p>Введите примечание</p>
    <textarea name="prim"></textarea>
<table border="2">
    <tr><th>№</th>
    <th>Фото</th>
    <th>Название</th>
    <th>Цена</th>
    <th>Количество</th>

 </tr>
    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['order']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <tr>
            <th><?php echo $_smarty_tpl->tpl_vars['sum']->value++;?>
</th>
            <th><img src="../images/<?php echo $_smarty_tpl->tpl_vars['order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo'];?>
" width="50px"></th>
            <th><?php echo $_smarty_tpl->tpl_vars['order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['count'];?>
</th>
        </tr>
    <?php
}
}
?>
    <tr><th colspan="4">Итого</th><th colspan="2"><?php echo $_smarty_tpl->tpl_vars['totalsum']->value;?>
</th></tr>
</table>
    <input type="submit" name="send" value="Оформить заказ">
</form><?php }
}
