<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));

//$url= $_SERVER['REQUEST_URI'];
//$url= "items/view/3/btcn-web";
$url= $_GET['url'];
//$url= "items/view/1";
//$url= "items/viewall";
//echo $url ."<br/>";
require_once (ROOT . DS . 'library' . DS . 'bootstrap.php');
