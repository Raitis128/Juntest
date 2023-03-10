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

    public function addProcess() {

        $this->setSku($_POST['sku']);
        $this->setName($_POST['name']);
        $this->setPrice($_POST['price']);
        $this->setSize($_POST['size']);

        $this->insertData($this->getSku(), $this->getName(), $this->getPrice(), null, null, null, $this->getSize(), null);
    }

}
