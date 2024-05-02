<?php
    /*
        PHP OOP - Classes and Objects
        A class is a template for objects, and an object is an instance of class.

        OOP Case : Let's assume we have a class named Fruit. A Fruit can have properties like name, color, weight, etc. We can define variables like $name, $color, and $weight to hold the values of these properties. When the individual objects (apple, banana, etc.) are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.

        Define a Class : A class is defined by using the class keyword, followed by the name of the class and a pair of curly braces ({}). All its properties and methods go inside the braces:

    */

    class Fruit{
        // class property
        public $name, $color, $weight, $price;

        // class methods
        public function setData(){
            $this->name = "Mango";
            $this->color = "Orange";
            $this->weight = "250Gms";
            $this->price = "120Rs.";
        }

        public function getData(){
            echo "<hr> Fruit Name is {$this->name} color is {$this->color} weight is {$this->weight} and price is {$this->price}";
        }
    }

    /*
        Define Objects : Classes are nothing without objects! We can create multiple objects from a class. Each object has all the properties and methods defined in the class, but they will have different property values. Objects of a class are created using the new keyword.
    */

    $fruit1 = new Fruit();
    $fruit1->setData();
    $fruit1->getData();

    $fruit2 = new Fruit();
    $fruit2->setData();
    $fruit2->getData();

    $fruit3 = new Fruit();
    $fruit3->setData();
    $fruit3->getData();
?>