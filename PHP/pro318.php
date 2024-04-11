<?php
    /*
        PHP array_intersect_assoc() Function : Compare the keys and values of two arrays, and return the matches:
    */ 

    $array1 = ["key1" => "Rajkot", "key2" => "Surat", "key3" => "Ahamdabad"];
    //$array2 = ["key1" => "Rajkot", "key2" => "Surat", "key3" => "Bhuj"];
    $array2 = ["key1" => "Rajkot", "key2" => "Surat", "key3" => "Ahamdabad"];

    $result = array_intersect_assoc($array1, $array2);

    print_r($result);
?>
