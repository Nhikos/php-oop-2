<?php 

class Store {

    protected $name;
    public $location;

    function __construct($location)
    {
        $this->location = $location;
    }

    public function setName($name){
        $this -> name = $name;
    }

}