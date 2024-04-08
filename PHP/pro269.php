<?php
    /*
        Access Array Item :
        To access an array item, you can refer to the index number for indexed arrays, and the key name for associative arrays.
    */ 

    $city = ["city1"=>"Rajkot", "city2"=>"Baroda", "city3"=>"Bhuj"];

    echo "<hr> First City is ".$city["city1"]; // Note: The first item has index 0.
    echo "<hr> First City is ".$city['city1']; // Note: The first item has index 0.

    /*
        Double or Single Quotes You can use both double and single quotes when accessing an array:
    */ 
    
?>