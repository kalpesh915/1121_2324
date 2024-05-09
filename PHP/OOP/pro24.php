<?php
    /*
        PHP - Overriding Inherited Methods

        Inherited methods can be overridden by redefining the methods (use the same name) in the child class.
    */

    class ParentClass{
        public function greetings(){
            echo "<hr> Good Morning";
        }
    }

    class ChildClass extends ParentClass{
        public function greetings(){
            echo "<hr> Have a Nice Day";
        }
    }

    $obj1 = new ChildClass();
    $obj1->greetings();
?>