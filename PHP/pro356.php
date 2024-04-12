<?php
    /*
        PHP array_values() Function
    */ 

    $array1 = ["lion", "tiger"];

    array_unshift($array1, "elephant");
    array_unshift($array1, "horse");
    array_unshift($array1, "panda");

    print_r($array1);
?>