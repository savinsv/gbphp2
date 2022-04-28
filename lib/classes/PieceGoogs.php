<?php
include_once "A_Tovar.php";
class PieceGoogs extends A_Tovar{
    
    public function __construct(string $name,float $price,string $measurement,int $count, string $description)
    {
        parent::__construct($name,$price,$measurement,$count,$description);
    }
    protected function getCost(){
        return $this->getPrice() * $this->getCount();
    }

}