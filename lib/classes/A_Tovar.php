<?php
abstract class A_Tovar{
    private $name;
    private $price;
    public function __construct(string $name,float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
    abstract protected function getCost();
    private function showCost(){
        echo $this->getCost;
    }
    

}