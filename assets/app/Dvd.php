<?php
require_once('DatabaseConsts.php');

class Dvd extends Product {

    public function __construct($size = 0) {
        parent::__construct();
        $this->size = $size;
    }

    public function setSize($size) {
        $this->size = $size;
    }

    public function getSize() {
        return $this->size;
    }

    public function insertData($sku, $name, $price, $weight) {
        try {
            $stm = $this->conn->prepare("INSERT INTO product(product_sku, product_name, product_price, product_size)
            values(?,?,?,?)");
            $stm->execute([$sku, $name, $price, $weight]);
        }
        catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function addProcess() {

        $this->setSku($_POST['sku']);
        $this->setName($_POST['name']);
        $this->setPrice($_POST['price']);
        $this->setSize($_POST['size']);

        $this->insertData($this->getSku(), $this->getName(), $this->getPrice(), $this->getSize());
    }

}
