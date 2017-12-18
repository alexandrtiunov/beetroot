<?php

class shopProduct{
    protected $name;
    protected $owner;
    protected $type;
    protected $price;
    protected $discount = 20;

    public function __construct($name, $owner, $type, $price)
    {
        $this->name = $name;
        $this->owner = $owner;
        $this->type = $type;
        $this->price = $price;
    }
    public function getInformation (){
        return "Название магазана: " . $this->name . "<br>" . "Издатель: " . $this->owner . "<br>" . "Тип магазина: " .
            $this->type . "<br>" . "Цена: "  . $this->price . "<br>";
    }
    public function priceWithDiscount(){
        $result = $this->price - ($this->price * $this->discount / 100) ;
        return "Стоимость товара со скидкой: " . $result;
    }

}
class BookProduct extends shopProduct{
    private $countBook;
    public function __construct($name, $owner, $type, $price, $countBook)
    {
        parent::__construct($name, $owner, $type, $price);
        $this->countBook = $countBook;
    }

    public function getInformation()
    {
        $result = parent::getInformation();
        return $result . "Колличество страниц в книге: " . $this->countBook;
    }
}
class CdProduct extends shopProduct{
    private $typeCD;
    public function __construct($name, $owner, $type, $price, $typeCD)
    {
        parent::__construct($name, $owner, $type, $price);
        $this->typeCD = $typeCD;
    }
    public function getInformation()
    {
        $result = parent::getInformation();
        return $result . "Тип диска: " . $this->typeCD;
    }

}

$book = new BookProduct ('Книжка', 'Пушкин А.С.', 'Книжный магазин', '230', '650');
$CD = new CdProduct('Цифра', '1C', 'Магазин по продаже дисков', '1500', 'DVD');

echo $book->getInformation();
echo '<br>' . $book->priceWithDiscount();
echo '<hr>';
echo $CD->getInformation();
echo '<br>' . $CD->priceWithDiscount();





//interface ITransport{
//    public function getPrice();
//    public function getSomeInformation();
//}interface ITransportTwo{
//    public function getTest();
//}
//
//abstract class Transport implements ITransport, ITransportTwo {
//    protected $brand ;
//    protected $speed;
//    protected $color;
//
//    function __construct($brand, $speed, $color)
//    {
//        $this->brand = $brand;
//        $this->speed = $speed;
//        $this->color = $color;
//        //$this->fuel = $fuel;
//    }
//
////    function __destruct()
////    {
////        print 'Удалится' . $this->brand;
////    }
//
//    public function getSomeInformation(){
//        return "Brand: " . $this->brand . "<br>" . "Speed: " . $this->speed . "<br>" . "Color: " . $this->color . "<br>";
//    }
//    public function setBrand($brand){
//        return $this->brand = $brand;
//    }
//}
//class Car extends Transport{
//    private $fuel;
//    public function __construct($brand, $speed, $color, $fuel)
//    {
//        parent::__construct($brand, $speed, $color);
//        $this->fuel = $fuel;
//    }
//    public function getSomeInformation(){
//        $result = parent::getSomeInformation();
//        return "<b>Характеристики машины: </b><br>" . $result . "Fuel: " .  $this->fuel;
//    }
//    public function getPrice()
//    {
//        // TODO: Implement getPrice() method.
//    }
//
//    function getBrand()
//    {
//        return $this->brand;
//    }
//}
//class Bicycle extends Transport{
//    private $type;
//    public function __construct($brand, $speed, $color, $type)
//    {
//        parent::__construct($brand, $speed, $color);
//        $this->type = $type;
//    }
//    public function getSomeInformation(){
//        $result = parent::getSomeInformation();
//        return "<b>Характеристики велосипеда: </b><br>" . $result . "Type: " .  $this->type;
//    }
//    public function getPrice()
//    {
//        // TODO: Implement getPrice() method.
//    }
//}
//
//$transportCollection = [];
//
//$transportCollection [] = new Car('Audi', 300, 'Black', 20);
//$transportCollection [] =  new Car('Ford', 200, 'Red', 10);
//$transportCollection [] = new Car('BMW', 350, 'White', 35);
//
//$transportCollection [] = new Bicycle('Oskar', '30', 'yellow', 'Детский');
//$transportCollection [] = new Bicycle('Oskar2', '20', 'blue', 'Взрослый');
//$transportCollection [] = new Bicycle('Oskar3', '45', 'black', 'Взрослый');
//
//foreach ($transportCollection as $object){
//    showObjectInformation($object);
//}
//function showObjectInformation(Transport $object){
//    echo '<p>' . $object->getSomeInformation();
//}





?>