<?php
    /*
        array_intersect_key() 	Compare arrays, and returns the matches (compare keys only)
    */ 

    $array1 = ["key1" => "Rajkot", "key2" => "Surat", "key3" => "Ahamdabad"];
    $array2 = ["key1" => "Rajkot", "key2" => "Surat", "key4" => "Bhuj"];
    //$array2 = ["key1" => "Rajkot", "key2" => "Surat", "key3" => "Ahamdabad"];

    $result = array_intersect_key($array1, $array2);

    print_r($result);
?>
