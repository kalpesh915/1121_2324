<?php
    /*
        PHP array_diff_assoc() Function 
        Compare the keys and values of two arrays, and return the differences:
    */ 

    $array1 = array("1"=>"Rajkot", "2"=>"Baroda", "3"=>"Surat", "4"=>"Ahamdabad");
    $array2 = array("1"=>"Rajkot", "2"=>"Baroda", "3"=>"Surat", "5"=>"Ahamdabad");
    //$array2 = array("1"=>"Rajkot", "2"=>"Baroda", "3"=>"Surat", "4"=>"Anand");

    $result = array_diff_assoc($array1, $array2);

    print_r($result);
?>