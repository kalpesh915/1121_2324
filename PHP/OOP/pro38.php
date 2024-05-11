<?php
    /*
        PHP - Static Properties
        Static properties can be called directly - without creating an instance of a class.Static properties are declared with the static keyword:
    */

    class parentClass{
        public static $college = "Darshan University";
    }

    echo parentClass::$college;

?>