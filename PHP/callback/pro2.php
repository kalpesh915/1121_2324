<?php
    /*
        PHP Callback Functions
        Callback Functions
        A callback function (often referred to as just "callback") is a function which is passed as an argument into another function.
        Any existing function can be used as a callback function. To use a function as a callback function, pass a string containing the name of the function as the argument of another function:
    */

    $fruits = ["Apple", "Banana", "Pineapple", "Mango", "Kiwi", "Lichi", "Strawberry"];

    function findLength($x) {
        return strlen($x);
    }

    $ans = array_map("findLength", $fruits);
    /*
        Pass a callback to PHP's array_map() function to calculate the length of every string in an array:

        Get one by one elements from fruits array and pass in findLength() and store result in $ans array 
    */
    print_r($ans);


?>
