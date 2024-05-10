<?php
    /*
        PHP - Class Constants
        Class constants can be useful if you need to define some constant data within a class. A class constant is declared inside a class with the const keyword.
        A constant cannot be changed once it is declared. Class constants are case-sensitive. However, it is recommended to name the constants in all uppercase letters. We can access a constant from outside the class by using the class name followed by the scope resolution operator (::) followed by the constant name, like here:
    */

    class Students{
        const college_name = "Darshn Institute of Engineering";
        const year = 2024;

        public function __construct(){
            echo "<hr> Welcome to : ".self::college_name;
        }
    }

    $obj1 = new Students();

?>