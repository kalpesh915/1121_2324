<?php
    /*
        PHP - What are Abstract Classes and Methods?
        Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.
        An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.
        An abstract class or method is defined with the abstract keyword:
    */

    abstract class Animal{
        abstract public function Speak();
    }

    class Dog extends Animal{
        public function Speak(){
            echo "<hr> Dog Bark How Howwww";
        }
    }

    class Cat extends Animal{
        public function Speak(){
            echo "<hr> Cat Say Meowwww Meowww";
        }
    }

    $dog = new Dog();
    $dog->Speak();

    $cat = new Cat();
    $cat->Speak();
?>