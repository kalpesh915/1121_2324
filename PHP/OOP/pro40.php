<?php
    /*
        class can have both static and non-static properties. A static property can be accessed from a method in the same class using the self keyword and double colon (::):
    */

    class parentClass{
        public static $college = "Darshan University";

        public function __construct(){
            echo "<hr>Welcome to ".self::$college;   
            $this->greetings();
        }

        public function greetings(){
            echo "<hr>Welcome to our college, name of college is ".self::$college;
        }
    }

    $obj1 = new parentClass();

?>