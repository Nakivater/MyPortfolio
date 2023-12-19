<?php
/* Smarty version 3.1.33, created on 2019-03-23 13:07:44
  from 'E:\OpenServer\domains\smarthy\admin\templates\update_items.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c960570b92121_83821882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0064923e5b187d5bca13862b44545417b4825fd5' => 
    array (
      0 => 'E:\\OpenServer\\domains\\smarthy\\admin\\templates\\update_items.tpl',
      1 => 1553335444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c960570b92121_83821882 (Smarty_Internal_Template $_smarty_tpl) {
?><h4>Редактирование товара <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h4>
<form enctype="multipart/form-data" method="post" action="update_items.php">
    <p>Отредактируйте meta_title</p>
    <textarea name="meta_title"><?php echo $_smarty_tpl->tpl_vars['meta_title']->value;?>
</textarea><br>
    <p>Отредактируйте meta_keyword</p>
    <textarea name="meta_keyword"><?php echo $_smarty_tpl->tpl_vars['meta_keyword']->value;?>
</textarea><br>
    <p>Отредактируйте meta_descript</p>
    <textarea name="meta_descript"><?php echo $_smarty_tpl->tpl_vars['meta_descript']->value;?>
</textarea><br>
    <p>Отредактируйте название товара</p>
<textarea name="name"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</textarea><br>
    <p>Отредактируйте характеристику</p>
<textarea name="har"><?php echo $_smarty_tpl->tpl_vars['har']->value;?>
</textarea><br>
    <p>Отредактируйте цену</p>
<input type="number" name="price" value="<?php echo $_smarty_tpl->tpl_vars['price']->value;?>
"><br>
<p>Отредактируйте количество</p>
    <input type="number" name="count" value="<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
"><br>
    <p>Отредактируйте фото</p><br><img src="../images/<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
 "width='100px'><br>
    <input type="file" name="newphoto">
    <input type="hidden" name="oldphoto" value="<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
">
<select name="id_cat_new">
    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['cat']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
    <option <?php if ($_smarty_tpl->tpl_vars['cat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_cat'] == $_smarty_tpl->tpl_vars['id_cat']->value) {?>selected <?php }?>value="<?php echo $_smarty_tpl->tpl_vars['cat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_cat'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name_cat'];?>
</option>
    <?php
}
}
?>
</select>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <input type="submit" name="send" value="Отредактировать">
</form>
<div class="myclass">
    <p>Добро пожаловать <?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</p>
    <p><img src="../images/<?php echo $_smarty_tpl->tpl_vars['user_avatar']->value;?>
" width="50px"></p>
</div><?php }
}
