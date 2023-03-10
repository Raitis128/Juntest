<?php
require_once('DatabaseConsts.php');

abstract class Product
{
    private $id = null;
    private $sku = null;
    private $name = null;
    protected $size = null;
    protected $price = null;
    protected $weight = null;
    protected $height = null;
    protected $width = null;
    protected $lenght = null;
    protected $conn;

    public function __construct(int $id = 0, string $sku = "", string $name = "", float $price = 0) {
        $this->id = $id;
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;

        $this->conn = new PDO(DatabaseConsts::DB_TYPE.":host=".DatabaseConsts::DB_HOST.";dbname=".DatabaseConsts::DB_NAME,
        DatabaseConsts::DB_USER, DatabaseConsts::DB_PWD, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setSku($sku) {
        $this->sku = $sku;
    }

    public function getSku() {
        return $this->sku;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getPrice() {
        return $this->price;
    }

    public function insertData($sku, $name, $price, $height, $width, $lenght, $weight, $size) {
        try {
            $stm = $this->conn->prepare("INSERT INTO product(product_sku, product_name, product_price, product_height, product_width, product_lenght, product_size, product_weight)
            values(?,?,?,?,?,?,?,?)");
            $stm->execute([$sku, $name, $price, $height, $width, $lenght, $weight, $size]);
        }
        catch (Exception $e) {
            return $e->getMessage();
        }
    }

    abstract function addProcess();
}
