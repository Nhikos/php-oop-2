<?php 
require_once __DIR__ . "/Store.php";
class Product extends Store {

    public $price;
    public $origin;
    public $category;
    public $quantity;

    function __construct($name, $price, $origin = "", $category = "", $quantity = "", $location = "")
    {
        parent::__construct($name, $location = "");
        $this -> price = $price;
        $this -> origin = $origin;
        $this -> category = $category;
        $this -> quantity = $quantity;
    }

    //methods
    public function setName($name){
        parent::setName($name);
    }

    public function getName(){
        return $this->name;
    }
};
