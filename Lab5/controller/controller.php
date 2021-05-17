<?php

define('ROOT', dirname(dirname(__FILE__)));
define('DS', DIRECTORY_SEPARATOR);
include (ROOT . DS . 'library' . DS . 'SQLQuery.php');
require_once (ROOT . DS . 'library' . DS . 'config.php');
$url = $_GET['url'];
$urlArray = array();
$urlArray = explode("/", $url);
$variables = array();
$action = $urlArray[0];
$nameTable = "Products";
$sql = new SQLQuery();
if ($action == "query.php") {
    $connect = $sql->connect($server, $user, $pass, $myd);
    if ($connect == 1) {
        $result = $sql->selectAll($nameTable);
        $variables['title'] = 'Success - My Todo List App';
        $variables['products'] = $result;
        extract($variables);
        include (ROOT . DS . $action);
    } else {
        echo "cannot connect database";
    }
} else if ($action == 'insert.html') {
    include (ROOT . DS . "insert.html");
} else if ($action == "insert_table.php") {
    $nameItem = $_POST["nameItem"];
    $weight = $_POST["weight"];
    $cost = $_POST["cost"];
    $numberAvailable = $_POST["numberAvailable"];
    $connect = $sql->connect($server, $user, $pass, $myd);
    if ($connect == 1) {
        $sql->create($nameItem, $weight, $cost, $numberAvailable);
        include (ROOT . DS . $action);
    } else {
        echo "cannot connect database";
    }
} else if ($action == 'search.html') {
    include (ROOT . DS . $action);
} else if ($action == 'search.php') {
    $nameItem = $_POST["nameItem"];
    $connect = $sql->connect($server, $user, $pass, $myd);
    if ($connect == 1) {
        $result = $sql->select4Name($nameTable, $nameItem);
        $variables['title'] = 'Success - My Todo List App';
        $variables['products'] = $result;
        extract($variables);
        include (ROOT . DS . $action);
    } else {
        echo "cannot connect database";
    }
} else if ($action == "startsale.php") {
    $connect = $sql->connect($server, $user, $pass, $myd);
    if ($connect == 1) {
        $result = $sql->selectAll($nameTable);
        $variables['title'] = 'Success - My Todo List App';
        $variables['products'] = $result;
        extract($variables);
        include (ROOT . DS . $action);
    } else {
        echo "cannot connect database";
    }
} else if ($action == "sale.php") {
    $connect = $sql->connect($server, $user, $pass, $myd);
    if ($connect == 1) {
        $name = $_POST['product'];
        $sql->update($nameTable, $name);
        $result = $sql->selectAll($nameTable);
        $variables['products'] = $result;
        $variables['itemName'] = $name;
        extract($variables);
        include (ROOT . DS . $action);
    } else {
        echo "cannot connect database";
    }
}