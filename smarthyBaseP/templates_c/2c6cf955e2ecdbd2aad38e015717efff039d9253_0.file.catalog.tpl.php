<?php
/* Smarty version 3.1.33, created on 2019-04-01 21:23:28
  from 'E:\OpenServer\domains\smarthy\templates\catalog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca25720e5f034_25315596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c6cf955e2ecdbd2aad38e015717efff039d9253' => 
    array (
      0 => 'E:\\OpenServer\\domains\\smarthy\\templates\\catalog.tpl',
      1 => 1554143006,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca25720e5f034_25315596 (Smarty_Internal_Template $_smarty_tpl) {
?><h4>Список товаров</h4>
<table border="2">
    <tr>
        <th>№</th>
        <th>Фото</th>
        <th>Название товара</th>
        <th>Цена</th>
        <th>Количество</th>
        <th>Характеристика</th>
    </tr>
    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['pages_items']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <tr><th><?php echo $_smarty_tpl->tpl_vars['num']->value++;?>
</th>
            <th><img src="images/<?php echo $_smarty_tpl->tpl_vars['pages_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo'];?>
"width="100px"></th>
            <th><?php echo $_smarty_tpl->tpl_vars['pages_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['pages_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'];?>
</th>
            <th><?php if ($_smarty_tpl->tpl_vars['pages_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['count'] > 0) {
echo $_smarty_tpl->tpl_vars['pages_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['count'];?>
<br><a href="Korzina.php?id=<?php echo $_smarty_tpl->tpl_vars['pages_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&mode=add&page=<?php echo $_smarty_tpl->tpl_vars['active_page']->value;?>
">Заказать</a><?php } else { ?>Нет на складе<?php }?></th>
            <th><a href="items_inf.php?id=<?php echo $_smarty_tpl->tpl_vars['pages_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">Подробнее</a></th>
        </tr>
    <?php
}
}
?>
</table>
<table border="1"><tr>
    <?php if ($_smarty_tpl->tpl_vars['active_page']->value == 1) {?>
        <td> |<| </td>
        <td> |<<| </td>
        <?php } else { ?>
            <th><a href="katalog.php?page=1<?php if (isset($_smarty_tpl->tpl_vars['idc']->value)) {?>&id_cat=<?php echo $_smarty_tpl->tpl_vars['idc']->value;
}?>"> < </a></th>
            <th><a href="katalog.php?page=<?php echo $_smarty_tpl->tpl_vars['active_page']->value-1;
if (isset($_smarty_tpl->tpl_vars['idc']->value)) {?>&id_cat=<?php echo $_smarty_tpl->tpl_vars['idc']->value;
}?>"> << </a></th>
        <?php }?>
 _ at      <!---->
    <?php
$__section_k_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['page_num']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_k_1_total = $__section_k_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_1_total !== 0) {
for ($__section_k_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $__section_k_1_iteration <= $__section_k_1_total; $__section_k_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
?>
        <?php if ($_smarty_tpl->tpl_vars['active_page']->value == $_smarty_tpl->tpl_vars['page_num']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['i']) {?>
<td><?php echo $_smarty_tpl->tpl_vars['page_num']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['i'];?>
</td>
        <?php } else { ?>
                <td><a href="katalog.php?page=<?php echo $_smarty_tpl->tpl_vars['page_num']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['i'];
if (isset($_smarty_tpl->tpl_vars['idc']->value)) {?>&id_cat=<?php echo $_smarty_tpl->tpl_vars['idc']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['page_num']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['i'];?>
</a></td>
            <?php }?>
    <?php
}
}
?>
        <!---->
<?php if ($_smarty_tpl->tpl_vars['active_pages']->value == $_smarty_tpl->tpl_vars['count_pages']->value) {?>
    <td> |>>| </td>
    <td> |>| </td>
    <?php } else { ?>
        <td><a href="katalog.php?page=<?php echo $_smarty_tpl->tpl_vars['active_page']->value+1;
if (isset($_smarty_tpl->tpl_vars['idc']->value)) {?>&id_cat=<?php echo $_smarty_tpl->tpl_vars['idc']->value;
}?>"> >> </a></td>
        <td><a href="katalog.php?page=<?php echo $_smarty_tpl->tpl_vars['count_pages']->value;
if (isset($_smarty_tpl->tpl_vars['idc']->value)) {?>&id_cat=<?php echo $_smarty_tpl->tpl_vars['idc']->value;
}?>"> > </a></td>
        <?php }?>
</tr></table>
<?php }
}
