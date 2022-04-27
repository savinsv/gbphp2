<?php
include_once "A_Tovar.php";
class WeightGoods extends A_Tovar{
    public function __construct(string $name,float $price,float $weight)
    {
        parent::__construct($name,$price);
        $this->weight = $weight;
    }
    protected function getCost(){
        return $this->price * $this->Weight;
    }
}