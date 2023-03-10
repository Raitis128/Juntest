<?php 
require_once('Product.php');
require_once('Dvd.php');
require_once('Furniture.php');
require_once('DatabaseConsts.php');

class Book extends Product 
{      
    public function __construct($weight = 0) {
        parent::__construct();
        $this->weight = $weight;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function fetchAll() {
        try {
            $stm = $this->conn->prepare("SELECT * FROM product");
            $stm->execute();
            return $stm->fetchAll();
        }
        catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function delete() {
        try {
            $stm = $this->conn->prepare("DELETE FROM product WHERE idproduct=?");
            $stm->execute([$this->getId()]);
            return true;
        }
        catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function checkSku() {
        try{
            $stm = $this->conn->prepare("SELECT count(*) as cntSku FROM product WHERE product_sku=?");
            $stm->execute([$this->getSku()]); 
            $count = $stm->fetchColumn();
            if($count > 0) {
                $response = "<div class='alert alert-danger' role='alert'>Not available</div>";
                echo $response;
            }
        }
        catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function addProcess() {

        $this->setSku($_POST['sku']);
        $this->setName($_POST['name']);
        $this->setPrice($_POST['price']);
        $this->setWeight($_POST['weight']);

        $this->insertData($this->getSku(), $this->getName(), $this->getPrice(), null, null, null, null, $this->getWeight());
    }
}
