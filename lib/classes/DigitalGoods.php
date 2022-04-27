<?php
include_once "A_Tovar.php";
class DigitalGoods extends A_Tovar{
    public function __construct(string $name,float $price)
    {
        parent::__construct($name,$price);
    }
    protected function getCost(){
        return $this->price;
    }
}