<?php
/* Smarty version 3.1.33, created on 2019-04-09 11:07:18
  from 'E:\OpenServer\domains\smarthy\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cac52b68e75b4_55079352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58c23db3343e7d1c09c62ea7f94a82b198ef2bf2' => 
    array (
      0 => 'E:\\OpenServer\\domains\\smarthy\\templates\\main.tpl',
      1 => 1554797236,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cac52b68e75b4_55079352 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $_smarty_tpl->tpl_vars['meta_title']->value;?>
</title>
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['meta_description']->value;?>
">
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['meta_keyword']->value;?>
">
    <link rel="stylesheet" type="text/css" href="style.css" media="all">
</head>
<body>
<div class="wrapper">
    <div class="header">
        <div class="headerContent">
            <div class="left"><h1><a href="#">Cherry</a></h1><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p></div>
            <div class="right">
               <!-- <form class="search">
                    <input type="text" placeholder="Search...">
                    <input type="image" src="images/search.png" title="Search">
                </form>
                -->
                    <form class="search" action="search.php" method="get" enctype="multipart/form-data">
                    <input type="text" name="search" placeholder="Search...">
                    <input type="submit" name="send" value="Поиск">
                </form>
            </div>
        </div>
    </div>
    <div class="slider">
        <div class="itemSlider">
            <div class="bgSlide"><img src="images/bg-slide.jpg"></div>
            <div class="descSlide">
                <h1>Eaten berry</h1>
                <p>and go for a walk</p>
                <span>Duis aute irure dolor...</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
    </div>
    <div class="nav">
        <ul class="menu">
           <!-- <li><a href="#">Home</a></li>-->
            <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['menu']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?><!--Секция smarty цикл который повторяет html код i имеет параметр loop=$menu массив который подсталяется с php  name=i Создфем счетчик для елементов массива.
            --><li><a href="<?php echo $_smarty_tpl->tpl_vars['menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['page'];?>
.php"><?php echo $_smarty_tpl->tpl_vars['menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</a> </li><!--Подставляем в html значение i елементов массива $menu[i].name -->
            <?php
}
}
?>
            <!--<li><a href="#">Sliders</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Styles</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Cherry</a></li>
            <li><a href="#">Contact</a></li>-->
        </ul>
    </div>
    <div class="breadcrumbs"><a href="#">Home</a> / <a href="#">Another Page</a> / This page</div>
    <div class="main">
        <div class="leftCol">
            <form>
                <!--<h2>Категории</h2>
                <input type="text" placeholder="Lorem ipsum">
                <input type="text" placeholder="Dolor sit">
                <input type="text" disabled="disabled" placeholder="Disabled">
                <input type="text" placeholder="Consectetur">
                <select>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>
                <div class="row">
                    <h4>Radio</h4>
                    <input type="radio">
                    <label>Lorem ipsum dolor sit amet</label>
                    <div class="clear"></div>
                    <input type="radio">
                    <label>Duis aute irure dolor</label>
                    <div class="clear"></div>
                    <input type="radio">
                    <label>Excepteur sint occaecat</label>
                    <div class="clear"></div>
                </div>
                <div class="row">
                    <h4>Checkbox</h4>
                    <input type="checkbox" />
                    <label>Duis aute irure dolor</label>
                    <div class="clear"></div>
                    <input type="checkbox" />
                    <label>Excepteur sint occaecat</label>
                    <div class="clear"></div>
                </div>-->
<ul class="menu" style="background-color: darkred">
                <?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['cat']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                        <li><a href="katalog.php?id_cat=<?php echo $_smarty_tpl->tpl_vars['cat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</a></li><br>
                <?php
}
}
?>
    </li><a href="katalog.php">Все</a></li><br>
</ul>
                                <!--<button type="reset" class="minWidth">Reset</button>-->
            </form>
            <div class="row">
                <h2>Headline</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p><a href="#">More about</a></p>
            </div>
        </div>
        <div class="rightCol">
            <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
            <div><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
            
            <!--<p><!--Место подстановки php файл
                {$privet}
            <p>
                {if $bal==5}
                    Коля, Молодец!
                    {elseif $bal==4}
                    Норм
                {else}
                    <strong>Получишь ремня</strong>
                {/if}
            </p>
            </p>-->
            
            <ul class="img">
                <li><a href="#"><img src="images/img1.png"></a></li>
                <li><a href="#"><img src="images/img2.png"></a></li>
                <li><a href="#"><img src="images/img3.png"></a></li>
            </ul>
            <h1>Lists</h1>
            <div class="row">
                <div class="span">
                    <h4>List style type circle <code>&lt;ul&gt;</code></h4>
                    <ul>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Sed ut perspiciatis unde</li>
                        <li>At vero eos et accusamus
                            <ul>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Sed ut perspiciatis unde</li>
                                <li>At vero eos et accusamus</li>
                            </ul>
                        </li>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Sed ut perspiciatis unde</li>
                        <li>At vero eos et accusamus</li>
                    </ul>
                </div>
                <div class="span">
                    <h4>Unstyled <code>&lt;ul class="unstyled"&gt;</code></h4>
                    <ul class="unstyled">
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Sed ut perspiciatis unde</li>
                        <li>At vero eos et accusamus
                            <ul>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Sed ut perspiciatis unde</li>
                                <li>At vero eos et accusamus</li>
                            </ul>
                        </li>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Sed ut perspiciatis unde</li>
                        <li>At vero eos et accusamus</li>
                    </ul>
                </div>
                <div class="span">
                    <h4>Ordered <code>&lt;ol&gt;</code></h4>
                    <ol>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Sed ut perspiciatis unde</li>
                        <li>At vero eos et accusamus</li>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Sed ut perspiciatis unde</li>
                        <li>At vero eos et accusamus</li>
                    </ol>
                </div>
            </div>
            <?php if (isset($_smarty_tpl->tpl_vars['korzina']->value)) {?>
           <div>
               <table>
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
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['korzina']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                   <tr>
                       <th><?php echo $_smarty_tpl->tpl_vars['counter']->value++;?>
</th>
                       <th><img src="/images/<?php echo $_smarty_tpl->tpl_vars['korzina']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo'];?>
" width="50px"></th>
                       <th><?php echo $_smarty_tpl->tpl_vars['korzina']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</th>
                       <th><?php echo $_smarty_tpl->tpl_vars['korzina']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'];?>
</th>
                       <th><?php echo $_smarty_tpl->tpl_vars['korzina']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['count'];?>
</th>
                       <th><?php echo $_smarty_tpl->tpl_vars['korzina']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['stoimost'];?>
</th>
                       <th><a href="Korzina.php?id=<?php echo $_smarty_tpl->tpl_vars['korzina']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&mode=dell"> X </a></th>
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
                       <th colspan="3"><a href="Korzina.php?mode=clear">Очистить</a></th>
                       <th colspan="4"><a href="order.php">Заказать</a></th></tr>
               </table>
           </div>
            <?php }?>
        </div>
    </div>
    <div class="footer">
        <div class="footerContent">
            <div class="span1">
                <h1>Sed ut</h1>
                <div class="borderBottom"></div>
                <p>Lorem ipsum dolor sit</p>
                <ul class="clock">
                    <li>Nights! Absolutely No Extra Charge</li>
                    <li>Weekends! Absolutely No Extra Charge</li>
                    <li>Holidays! Absolutely No Extra Charge</li>
                </ul>
                <div class="social">
                    <div>Мы в социальных сетях: </div><ul><li><a target="newtab" href="http://www.facebook.com/?sk=app_2309869772"><img src="images/facebook.png"></a></li><li><a target="newtab" href="https://twitter.com/psdhtmlcss"><img src="images/twitter.png" /></a></li><li><img src="images/vk.png" /></li></ul>
                </div>
            </div>
            <div class="span1">
                <h1>At vero eos</h1>
                <div class="borderBottom"></div>
                <p>Lorem ipsum dolor sit</p>
                <ul>
                    <li>West Hollywood (323) 221-1107</li>
                    <li>Beverly Hills (310) 202-5428</li>
                    <li>Pasadena (626) 296-2664</li>
                    <li>West Hollywood (323) 221-1107</li>
                    <li>Beverly Hills (310) 202-5428</li>
                </ul>
                <p><strong>Lorem ipsum dolor sit amet</strong></p>
            </div>
            <div class="span1">
                <h1>Lorem ipsum dolor</h1>
                <div class="borderBottom"></div>
                <p>Lorem ipsum dolor sit</p>
                <ul class="unstyled">
                    <li>Hi-Tech Cherry Company</li>
                    <li><a href="mailto:psdhtmlcss@mail.ru">infocherry@gmail.com</a></li>
                    <li>5104 W. Washington Blvd</li>
                    <li>Los Angeles , CA , 90016 United States</li>
                </ul>
            </div>
        </div>
    </div>
</div>
</body>
</html><?php }
}
