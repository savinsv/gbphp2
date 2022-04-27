<?php
include_once "A_Tovar.php";
class PieceGoogs extends A_Tovar{
    public function __construct(string $name,float $price,int $count)
    {
        parent::__construct($name,$price);
        $this->count = $count;
    }
    protected function getCost(){
        return $this->price * $this->count;
    }

}