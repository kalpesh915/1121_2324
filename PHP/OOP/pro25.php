<?php
    /*
        PHP - The final Keyword
        The final keyword can be used to prevent class inheritance or to prevent method overriding. The following example shows how to prevent class inheritance:
    */

    class ParentClass{
        final public function greetings(){
            echo "<hr> Good Morning";
        }
    }

    class ChildClass extends ParentClass{
       // error aavse 
        public function greetings(){
            echo "<hr> Have a Nice Day";
        }
    }

    $obj1 = new ChildClass();
    $obj1->greetings();
?>