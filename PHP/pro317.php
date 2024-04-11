<?php
    /*
        array_intersect() 	Compare arrays, and returns the matches (compare values only)
    */ 

    $array1 = ["key1" => "Rajkot", "key2" => "Surat", "key3" => "Ahamdabad"];
    //$array2 = ["key1" => "Rajkot", "key2" => "Surat", ];
    //$array2 = ["key1" => "Rajkot", "key2" => "Surat", "key3" => "Ahamdabad"];
    $array2 = ["key1" => "Rajkot", "key2" => "Surat", "key3" => "Bhuj"];

    $result = array_intersect($array1, $array2);

    print_r($result);
?>
