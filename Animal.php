<?php

// Animal class
class Animal {
    protected $species;
    protected $habitat;
    protected $diet;

    public function __construct($species, $habitat, $diet) {
        $this->species = $species;
        $this->habitat = $habitat;
        $this->diet = $diet;
    }
//function to get species
    public function getSpecies() {
        return $this->species;
    }
//function to set species
    public function setSpecies($species) {
        $this->species = $species;
    }
//function to get habitat
    public function getHabitat() {
        return $this->habitat;
    }
//function to set habitat
    public function setHabitat($habitat) {
        $this->habitat = $habitat;
    }
//function to get diet
    public function getDiet() {
        return $this->diet;
    }
//function to set diet
    public function setDiet($diet) {
        $this->diet = $diet;
    }
//function to make sound
    public function makeSound() {
        return "Animal sound";
    }
}

// Mammal class
class Mammal extends Animal {
    private $furColor;
    private $numberOfLegs;
    private $isWarmBlooded;

    public function __construct($species, $habitat, $diet, $furColor, $numberOfLegs, $isWarmBlooded) {
        parent::__construct($species, $habitat, $diet);
        $this->furColor = $furColor;
        $this->numberOfLegs = $numberOfLegs;
        $this->isWarmBlooded = $isWarmBlooded;
    }
//function to get fur color
    public function getFurColor() {
        return $this->furColor;
    }
//function to set fur color
    public function setFurColor($furColor) {
        $this->furColor = $furColor;
    }
//function to get no. of legs
    public function getNumberOfLegs() {
        return $this->numberOfLegs;
    }
//function to set no. of legs
    public function setNumberOfLegs($numberOfLegs) {
        $this->numberOfLegs = $numberOfLegs;
    }
//function to get if warm blooded
    public function getIsWarmBlooded() {
        return $this->isWarmBlooded;
    }
//function to set if warm blooded
    public function setIsWarmBlooded($isWarmBlooded) {
        $this->isWarmBlooded = $isWarmBlooded;
    }
//function to make sound
    public function makeSound() {
        return "Rawrr";
    }
}

// Bird class
class Bird extends Animal {
    private $wingSpan;
    private $canFly;
    private $beakLength;

    public function __construct($species, $habitat, $diet, $wingSpan, $canFly, $beakLength) {
        parent::__construct($species, $habitat, $diet);
        $this->wingSpan = $wingSpan;
        $this->canFly = $canFly;
        $this->beakLength = $beakLength;
    }
//function to get wing span
    public function getWingSpan() {
        return $this->wingSpan;
    }
//function to  set wing span
    public function setWingSpan($wingSpan) {
        $this->wingSpan = $wingSpan;
    }
//function to get can fly
    public function getCanFly() {
        return $this->canFly;
    }
//function to set can fly
    public function setCanFly($canFly) {
        $this->canFly = $canFly;
    }
//function to get beak length
    public function getBeakLength() {
        return $this->beakLength;
    }
//function to set beak length
    public function setBeakLength($beakLength) {
        $this->beakLength = $beakLength;
    }
//function to make sound
    public function makeSound() {
        return "Tweet";
    }
}

//declaring objects
$mammal = new Mammal("Tiger", "Jungle", "Carnivore", "Orange", 4, true);
$bird = new Bird("Eagle", "Mountains", "Carnivore", 2, true, "Long");

//use setter methods
$mammal->setSpecies("Deer");
$mammal->setHabitat("Jungle");
$bird->setSpecies("Owl");
$bird->setDiet("Mountains");

//display the information
echo "Mammal: " . $mammal->getSpecies() . ", Habitat: " . $mammal->getHabitat() . ", Diet: " . $mammal->getDiet() . ", Sound: " . $mammal->makeSound() . "\n";
echo "<br>";
echo "Bird: " . $bird->getSpecies() . ", Habitat: " . $bird->getHabitat() . ", Diet: " . $bird->getDiet() . ", Sound: " . $bird->makeSound() . "\n";

?>