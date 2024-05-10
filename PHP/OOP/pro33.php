<?php
    /*
        PHP - What are Traits?
        PHP only supports single inheritance: a child class can inherit only from one single parent.
        So, what if a class needs to inherit multiple behaviors? OOP traits solve this problem.
        Traits are used to declare methods that can be used in multiple classes. Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected). Traits are declared with the trait keyword:
    */

    trait Math1{
        public function findMax($ip1, $ip2){
            echo "<hr> Max is : ".($ip1 > $ip2 ? $ip1 : $ip2);
        }

        public function findMin($ip1, $ip2){
            echo "<hr> Min is : ".($ip1 < $ip2 ? $ip1 : $ip2);
        }
    }

    trait Math2{
        public function Square($ip1){
            echo "<hr> Square of $ip1 is : ".($ip1 * $ip1);
        }

        public function Cube($ip1){
            echo "<hr> Cube of $ip1 is : ".($ip1 * $ip1 * $ip1);
        }
    }

    class Maths{
        use Math1, Math2;
    }

    $obj1 = new Maths();

    $obj1->findMax(111, 22);
    $obj1->findMin(111, 22);
    $obj1->Square(5);
    $obj1->Cube(5);
?>