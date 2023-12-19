<?php
session_start();
define("SMARTY_LIB","libs/");//Конмтанта которая хранит путь к Smarty библилтеке.
require_once (SMARTY_LIB."Smarty.class.php");//Подклчаем основной файл библиотеки Smarty.
require_once ("admin/param.php");
$smarty_main=new Smarty();