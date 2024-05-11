<?php
    /*
        PHP - Static Methods
        Static methods can be called directly - without creating an instance of the class first. Static methods are declared with the static keyword:
    */

    class DemoClass{
        public static function greetings(){
            echo "<hr> Good Morning Static Function Called";
        }
    }

    // To access a static method use the class name, double colon (::), and the method name:
    DemoClass::greetings();
?>