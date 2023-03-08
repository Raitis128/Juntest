<?php 
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

require_once('Book.php');
require_once('Furniture.php');
require_once('Dvd.php');

$product = $_POST['switcher'];
$obj = new $product();
$obj->addProcess();

header('Location: ../../');
