<?php 
require_once('Book.php');

$product = new Book();

$product->setSku($_POST['product_sku']);
$product->checkSku();



