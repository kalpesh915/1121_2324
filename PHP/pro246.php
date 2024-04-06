<?php
    declare(strict_types=1);
    /*
        PHP Return Type Declarations
        PHP 7 also supports Type Declarations for the return statement. Like with the type declaration for function arguments, by enabling the strict requirement, it will throw a "Fatal Error" on a type mismatch.

        function_keyword function_name(list of parameters) : return type{
            executable code
            return statement
        }

        To declare a type for the function return, add a colon ( : ) and the type right before the opening curly ( { )bracket when declaring the function.
    */

    function makeDiv(int $ip1, int $ip2) : int {
        //return $ip1 / $ip2;
        return (int)($ip1 / $ip2);
    }

    echo "<hr> Division is : ".makeDiv(110, 22);
    echo "<hr> Division is : ".makeDiv(110, 3);

?>