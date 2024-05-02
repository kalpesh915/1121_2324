<?php
    /*
        PHP - The __construct Function
        Example of Parameterized Constructor
    */

    class Fruit{
        public $name, $color;
        public function __construct($name, $color){
            $this->name = $name;
            $this->color = $color;

            $this->printData();
        }

        public function printData(){
            echo "<hr> Fruit Name is {$this->name} and color is {$this->color}";
        }
    }

    $obj1 = new Fruit("Apple", "Red");
    $obj2 = new Fruit("Banana", "Yellow");
    $obj3 = new Fruit("Kiwi", "Green");
    $obj4 = new Fruit("Mango", "Orange");
    $obj5 = new Fruit("Pineapple", "Yellow");
?>