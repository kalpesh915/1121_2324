<?php
    /*
        PHP - instanceof : You can use the instanceof keyword to check if an object belongs to a specific class:
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
   
    var_dump(($fruit1 instanceof Fruit));
?>