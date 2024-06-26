<?php
    /*
        PHP - The final Keyword
        The final keyword can be used to prevent class inheritance or to prevent method overriding. The following example shows how to prevent class inheritance:
    */

    final class ParentClass{
        public function greetings(){
            echo "<hr> Good Morning";
        }
    }

    // we cannot inherit final class
    class ChildClass extends ParentClass{
        public function greetings(){
            echo "<hr> Have a Nice Day";
        }
    }

    $obj1 = new ChildClass();
    $obj1->greetings();
?>