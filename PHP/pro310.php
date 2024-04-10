<?php
    /*
        array_diff_key() 	Compare arrays, and returns the differences (compare keys only)
    */ 

    $array1 = array("1"=>"Rajkot", "2"=>"Baroda", "3"=>"Surat", "4"=>"Ahamdabad");
    //$array2 = array("1"=>"Rajkot", "2"=>"Baroda", "3"=>"Surat", "5"=>"Ahamdabad");
    $array2 = array("1"=>"Rajkot", "2"=>"Baroda", "3"=>"Surat", "4"=>"Anand");

    $result = array_diff_key($array1, $array2);

    print_r($result);
?>