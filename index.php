<?php
spl_autoload_register(function($className){
    include_once "lib/classes/$className.php";
});

$weightGoods = new WeightGoods("Сахар",1410,"кг",6,"Упаковка 5 кг",3, 5);
$digGoods = new DigitalGoods("Microsoft Windows 11 Pro OEM",2649.99,"шт.",2,"Цифровая лицензия");

$goods = [$weightGoods,$digGoods];

foreach ($goods as $item){
   echo $item->getCheck()."<hr>";
}