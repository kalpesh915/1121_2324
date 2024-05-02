<?php
    /*
        setter and getter methods for class property

        PHP - The $this Keyword
        The $this keyword refers to the current object, and is only available inside methods.
    */

    class Fruit{
        // class property
        public $name, $color, $weight, $price;

        // class setter methods
        public function setName($name){
            $this->name = $name;
        }

        public function setColor($color){
            $this->color = $color;
        }

        public function setWeight($weight){
            $this->weight = $weight;
        }

        public function setPrice($price){
            $this->price = $price;
        }

        // class getter methods
        public function getName(){
            return $this->name;
        }

        public function getColor(){
            return $this->color;
        }

        public function getWeight(){
            return $this->weight;
        }

        public function getPrice(){
            return $this->price;
        }
    }


    $fruit1 = new Fruit();
    $fruit1->setName("Mango");
    $fruit1->setColor("Orange");
    $fruit1->setWeight("120Gms");
    $fruit1->setPrice("150Rs.");
    
    echo "<hr>".$fruit1->getName()." ".$fruit1->getColor()." ".$fruit1->getWeight()." ".$fruit1->getPrice();

?>