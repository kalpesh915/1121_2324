<?php
    /*
        PHP array_filter() Function : Filter the values of an array using a callback function
    */ 

    function findOdd($value){
        if($value %2 == 1){
            return $value;
        }
    }

    $keys = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 13, 15, 18, 17, 19];

    $result = array_filter($keys, "findOdd");
    print_r($result);
?>
