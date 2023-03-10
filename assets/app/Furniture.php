<?php 
require_once('DatabaseConsts.php');

class Furniture extends Product {

    public function __construct($height = 0, $width = 0, $lenght = 0) {
        parent::__construct();
        $this->height = $height;
        $this->width = $width;
        $this->lenght = $lenght;
    }

    public function setHeight($height) {
        $this->height = $height;
    }

    public function getHeight() {
        return $this->height;
    }

    public function setWidth($width) {
        $this->width = $width;
    }

    public function getWidth() {
        return $this->width;
    }

    public function setLenght($lenght) {
        $this->lenght = $lenght;
    }

    public function getLenght() {
        return $this->lenght;
    }

    public function addProcess() {

        $this->setSku($_POST['sku']);
        $this->setName($_POST['name']);
        $this->setPrice($_POST['price']);
        $this->setHeight($_POST['height']);
        $this->setWidth($_POST['width']);
        $this->setLenght($_POST['lenght']);

        $this->insertData($this->getSku(), $this->getName(), $this->getPrice(), $this->getHeight(), $this->getWidth(), $this->getLenght(), null, null);
    }

}
