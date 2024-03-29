<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{$meta_title}</title>
    <meta name="description" content="{$meta_description}">
    <meta name="keywords" content="{$meta_keyword}">
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
            {section loop=$menu name=i}<!--Секция smarty цикл который повторяет html код i имеет параметр loop=$menu массив который подсталяется с php  name=i Создфем счетчик для елементов массива.
            --><li><a href="{$menu[i].page}.php">{$menu[i].name}</a> </li><!--Подставляем в html значение i елементов массива $menu[i].name -->
            {/section}
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
                {section loop=$cat name=i}
                        <li><a href="katalog.php?id_cat={$cat[i].id}">{$cat[i].name}</a></li><br>
                {/section}
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
            <h1>{$title}</h1>
            <div>{$content}</div>
            {literal}
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
            {/literal}
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
            {if isset($korzina)}
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
               {section loop=$korzina name=i}
                   <tr>
                       <th>{$counter++}</th>
                       <th><img src="/images/{$korzina[i].photo}" width="50px"></th>
                       <th>{$korzina[i].name}</th>
                       <th>{$korzina[i].price}</th>
                       <th>{$korzina[i].count}</th>
                       <th>{$korzina[i].stoimost}</th>
                       <th><a href="Korzina.php?id={$korzina[i].id}&mode=dell"> X </a></th>
                   </tr>
               {/section}
                   <tr>
                       <th colspan="5">Итого</th>
                       <th colspan="2">{$totalsum}</th>
                   </tr>
                   <tr>
                       <th colspan="3"><a href="Korzina.php?mode=clear">Очистить</a></th>
                       <th colspan="4"><a href="order.php">Заказать</a></th></tr>
               </table>
           </div>
            {/if}
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
</html>