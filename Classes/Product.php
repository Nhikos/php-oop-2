<?php 
require_once __DIR__ . "/Store.php";
require_once __DIR__ . "/Discount.php";
class Product extends Store {

    use Discount;

    public $price;
    public $origin;
    public $quantity;

    function __construct($name, $price, $origin = "", $quantity = "", $location = "", $discount, $category = "")
    {
        parent::__construct($name, $location = "");
        $this -> price = $price;
        $this -> origin = $origin;
        $this -> quantity = $quantity;
        $this -> discount = $discount;
        $this -> category = $category;
    }

    //methods
    public function setName($name){
        parent::setName($name);
    }

    public function getName(){
        return $this->name;
    }

    public function getSalePrice(){
        return number_format($this -> price - ($this -> price * $this->getDiscount() / 100), 2) . "$";
    }

    public function getPrice(){
        return number_format($this -> price, 2) . "$";
    }

};
