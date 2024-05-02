<?php
    /*
        PHP - The __destruct Function
        A destructor is called when the object is destructed or the script is stopped or exited. If you create a __destruct() function, PHP will automatically call this function at the end of the script.
        Notice that the destruct function starts with two underscores (__)!
    */

    class Fruit{
        public $name, $color;
        public function __construct($name, $color){
            $this->name = $name;
            $this->color = $color;

            $this->printData();
        }

        public function __destruct(){
            echo "<hr> Object Deleted";
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