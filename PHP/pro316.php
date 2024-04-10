<?php
    /*
        PHP array_flip() Function : Flip all keys with their associated values in an array:
    */ 

    $array1 = ["roll" => 1, "fname" => "Brijesh", "lname" => "Miatra", "city" => "Rajkot"];

    $result = array_flip($array1);
    print_r($result);
?>
