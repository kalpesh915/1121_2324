<?php
    /*
        PHP Callback Functions
        Starting with version 7, PHP can pass anonymous functions as callback functions:
    */

    $fruits = ["Apple", "Banana", "Pineapple", "Mango", "Kiwi", "Lichi", "Strawberry"];


    $ans = array_map(function($x){return strlen($x);}, $fruits);
    print_r($ans);
?>
