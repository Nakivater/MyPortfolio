<?php
/* Smarty version 3.1.33, created on 2019-03-23 13:00:34
  from 'E:\OpenServer\domains\smarthy\admin\templates\add_items.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c9603c2bd3c73_35825402',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4359cbb2811a77645e1b715e5fb5713f7456d0c6' => 
    array (
      0 => 'E:\\OpenServer\\domains\\smarthy\\admin\\templates\\add_items.tpl',
      1 => 1553335222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9603c2bd3c73_35825402 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="add_items.php" method="post" enctype="multipart/form-data">
    <p>Введите title</p>
    <textarea name="meta_title"></textarea>
    <p>Введите ключевое слово</p>
    <textarea name="meta_keyword"></textarea>
    <p>Введите описание</p>
    <textarea name="meta_descript"></textarea><br>
    <input type="text" name="name" placeholder="Введите название товара"><br>
    <input type="text" name="har" placeholder="Введите характеристику"><br>
    <input type="number" name="price" placeholder="Введите цену товара"><br>
    <input type="number" name="count" placeholder="Введите количество товара"><br>
    <input type="file" name="photo"><br>
    <select name="id_cat">
        <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['cat']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name_cat'];?>
</option>
        <?php
}
}
?>
    </select><br>
    <input type="submit" name="send" value="Отправить">
</form>
<div class="myclass">
    <p>Добро пожаловать <?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</p>
    <p><img src="../images/<?php echo $_smarty_tpl->tpl_vars['user_avatar']->value;?>
" width="50px"></p>
</div><?php }
}
