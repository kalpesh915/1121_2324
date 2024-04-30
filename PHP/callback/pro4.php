<?php
    /*
        Callbacks in User Defined Functions
        User-defined functions and methods can also take callback functions as arguments. To use callback functions inside a user-defined function or method, call it by adding parentheses to the variable and pass arguments as with normal functions:
    */


    function exclaim($str){
        return $str."! ";
    }

    function comma($str){
        return $str.", ";
    }

    function question($str){
        return $str."? ";
    }

    function fullstop($str){
        return $str.". ";
    }

    function printer($str, $callback){
        echo "<hr>".$callback($str);
    }

    printer("Welcome Meet", "comma");
    printer("Welcome Pooja", "fullstop");
    printer("Welcome Alan", "question");
?>
