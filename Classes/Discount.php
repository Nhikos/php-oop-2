<?php
trait Discount {
    public $discount;
    public $category;

    public function getDiscount() {
        return ($this->category == "informatica") ? $this->discount = 30
            : (($this->category == "alimentari") ? $this->discount = 20
            : $this->discount = 10);
    }
}
