<?php
    /*
        setter and getter methods for class property
    */

    class Fruit{
        // class property
        public $name, $color, $weight, $price;

        // class setter methods
        public function setData($name, $color, $weight, $price){
            $this->name = $name;
            $this->color = $color;
            $this->weight = $weight;
            $this->price = $price;
        }

        // class getter methods
        public function getData(){
            echo "<hr> Fruit Name is {$this->name} color is {$this->color} weight is {$this->weight} and price is {$this->price}";
        }
    }


    $fruit1 = new Fruit();
    $fruit1->setData("Mango", "Orange", "120Gms", "150Rs.");
    $fruit1->getData();

?>