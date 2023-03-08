<?php 
require_once('Book.php');
$product = new Book();

$ids = $_POST['productid'];
foreach($ids as $id) {
    $product->setId($id);
    $product->delete();
}

