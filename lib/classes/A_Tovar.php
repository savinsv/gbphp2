<?php


abstract class A_Tovar{
    private $name; //Наименование товара
    private $price; //Цена за условную единицу товара
    private $measurement; //Единица измерения
    private $count; //Количество приобретаемого товара
    private $description; //Описание товара
    public function __construct(string $name,float $price,string $measurement,$count, string $description)
    {
        $this->name = $name;
        $this->price = $price;
        $this->measurement = $measurement;
        $this->count = $count;
        $this->description = $description;
    }
    //
    public function getName(){
        return $this->name;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getMeasurement(){
        return $this->measurement;
    }
    public function getCount(){
        return $this->count;
    }
    public function getDescription(){
        return $this->description;
    }
    public function getCheck(){
        return "Наименование: {$this->name}<br>
                {$this->description}<br>
                Цена: {$this->price}<br>
                Количество: {$this->count}<br>
                Единица измерения: {$this->measurement}";
    }

    //
    public function setName($name){
        $this->name = $name;
    }
    public function setPrice($price){
        $this->price = $price;
    }
    public function setMeasurement($measurement){
        $this->measurement = $measurement;
    }
    public function setCount($count){
        $this->count = $count;
    }
    public function setDescription($description){
        $this->description = $description;
    }

    abstract protected function showCost();
    public function getCost(){
        return $this->showCost();
    }
    

}