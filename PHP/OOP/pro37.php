<?php
    /*
        Static methods can also be called from methods in other classes. To do this, the static method should be public:
    */

    class parentClass{
        public static function greetings(){
            echo "<hr> Good Morning Static Function Called";
        }
    }

    class childClass extends parentClass{
        public function __construct(){
            parentClass::greetings();
            parent::greetings();
        }
    }

    $obj1 = new childClass();

?>