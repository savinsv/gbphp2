<?php
include_once "A_Tovar.php";
class WeightGoods extends A_Tovar{
    private $discount; //
    private $minCount; //
    public function __construct(string $name,float $price,string $measurement,float $count,string $description,int $discount,float $minCount)
    {
        parent::__construct($name,$price,$measurement,$count,$description);
        $this->discount = $discount;
        $this->minCount = $minCount;
    }
    private function getDiscountSumm(){
        return ($this->getCount() > $this->minCount) ? $this->getPrice() * $this->getCount()*$this->discount/100 : 0;
    }

    protected function showCost(){
        $cost =  $this->getPrice() * $this->getCount();
        return $this->getPrice() * $this->getCount() - $this->getDiscountSumm();
    }
    public function getCheck(){
        return parent::getCheck() ."<br>
        Скидка: {$this->getDiscountSumm()} <br>
        Стоимость:  {$this->getCost()}";
    }
}