<?php
    /*
        PHP - The __construct Function
        Example of Default Constructor
    */

    class Fruit{
        public $name, $color;
        public function __construct(){
            $this->name = "Mango";
            $this->color = "Ornage";

            echo "<hr> Fruit Name is {$this->name} and color is {$this->color}";
        }
    }

    $obj1 = new Fruit();
    $obj2 = new Fruit();
    $obj3 = new Fruit();
    $obj4 = new Fruit();
    $obj5 = new Fruit();
?>