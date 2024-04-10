<?php
    /*
        array_diff_ukey() 	Compare arrays, and returns the differences (compare keys only, using a user-defined key comparison function)
    */ 

    function compare($ip1, $ip2){
        if($ip1 == $ip2){
            return 0;
        }else{
            return ($ip1 > $ip2) ? 1 : -1;
        }
    }

    $array1 = array("1"=>"Rajkot", "2"=>"Baroda", "3"=>"Surat", "4"=>"Ahamdabad");
    $array2 = array("1"=>"Rajkot", "2"=>"Baroda", "3"=>"Surat", "5"=>"Ahamdabad");
    //$array2 = array("1"=>"Rajkot", "2"=>"Baroda", "3"=>"Surat", "4"=>"Anand");

    $result = array_diff_ukey($array1, $array2, "compare");

    print_r($result);
?>