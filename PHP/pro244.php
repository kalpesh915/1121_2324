<?php
    declare(strict_types=1);
    /*
        PHP is a Loosely Typed Language
        In the examples above, notice that we did not have to tell PHP which data type the variable is. PHP automatically associates a data type to the variable, depending on its value. Since the data types are not set in a strict sense, you can do things like adding a string to an integer without causing an error.
        In PHP 7, type declarations were added. This gives us an option to specify the expected data type when declaring a function, and by adding the strict declaration, it will throw a "Fatal Error" if the data type mismatches.
        In the following example we try to send both a number and a string to the function without using strict:
    */

    function makeSum(int $ip1, int $ip2){
        echo "Sum is ".($ip1 + $ip2);
    }

    makeSum(11, 22);
    makeSum(11, "ok");

    // The strict declaration forces things to be used in the intended way.
?>