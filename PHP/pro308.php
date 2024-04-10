<?php
    /*
        array_diff() 	Compare arrays, and returns the differences (compare values only)
    */ 

    $array1 = array("1"=>"Rajkot", "2"=>"Baroda", "3"=>"Surat", "4"=>"Ahamdabad");
    //$array2 = array("1"=>"Rajkot", "2"=>"Baroda", "3"=>"Surat", "5"=>"Ahamdabad");
    $array2 = array("1"=>"Rajkot", "2"=>"Baroda", "3"=>"Surat", "4"=>"Anand");

    $result = array_diff($array1, $array2);

    print_r($result);
?>