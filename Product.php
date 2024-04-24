<?php
class Product{
    protected $name;
    protected $price;
    protected $unit;

    public function __construct($name, $price, $unit){
        $this->name = $name;
        $this->price = $price;
        $this->unit = $unit;
    }
    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function getPrice(){
        return $this->price;
    }
    public function setPrice($price){
        $this->price = $price;
    }
    public function getUnit(){
        return $this->unit;
    }
    public function setUnit($unit){
        $this->unit = $unit;
    }
    
}
class Book extends Product{
    private $author;
    private $ISBN;
    private $publisher;

    public function __construct($name, $price, $unit, $author, $ISBN, $publisher){
        parent::__construct($name, $price, $unit);
        $this->author = $author;
        $this->ISBN = $ISBN;
        $this->publisher = $publisher;
    }
    public function getAuthor(){
        return $this->author;
    }
    public function setAuthor($author){
        $this->author = $author;
    }
    public function getISBN(){
        return $this->ISBN;
    }
    public function setISBN($ISBN){
        $this->ISBN = $ISBN;
    }
    public function getPublisher(){
        return $this->publisher;
    }
    public function setPublisher($publisher){
        $this->publisher = $publisher;
    }

}
class Electronic extends Product{
    private $manufacturer;
    
    public function __construct($name, $price, $unit, $manufacturer){
        parent::__construct($name, $price, $unit);
        $this->manufacturer = $manufacturer;
    }
    public function getManufacturer(){
        return $this->manufacturer;
    }
    public function setManufacturer($manufacturer){
        $this->manufacturer = $manufacturer;
    }
}

$book = new Book("Frankenstein", "$300", "copy", "Mary Shelley", "978495876215", "Lackington, Hughes, Harding, Mavor & Jones");
$electronic = new Electronic("iPhone 15", "$1000", "piece", "Apple");

echo "Book: ".$book->getName() . ", Price: ".$book->getPrice() . ", Unit: ".$book->getUnit();
echo "<br>";
echo "Electronic: ".$electronic->getName() . ", Price: ".$electronic->getPrice() . ", Unit: ".$electronic->getUnit();

?>