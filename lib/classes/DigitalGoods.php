<?php
include_once "A_Tovar.php";

class DigitalGoods extends A_Tovar{
    public function __construct(string $name,float $price,string $measurement, int $count, string $description)
    {
        parent::__construct($name,$price,$measurement,$count,$description);

    }
    protected function showCost(){
        return $this->getPrice() * $this->getCount();
    }
    public function getCheck(){
        return parent::getCheck() ."<br>
        Стоимость:  {$this->getCost()}";
    }

}