<?php
    /*
        PHP array_uintersect_uassoc() Function
        Compare the keys and values of two arrays (using two user-defined functions for comparison) and return the matches:
    */ 

    function compare_value($ip1, $ip2){
        if($ip1 == $ip2){
            return 0;
        }else{
            return ($ip1 > $ip2) ? 1 : -1;
        }
    }

    function compare_key($ip1, $ip2){
        if($ip1 == $ip2){
            return 0;
        }else{
            return ($ip1 > $ip2) ? 1 : -1;
        }
    }

    $array1 = array("a"=>"red","b"=>"green","c"=>"blue");
    $array2 = array("a"=>"purple","b"=>"green","c"=>"blue");

    $result = array_uintersect_uassoc($array1, $array2, "compare_value", "compare_key");

    print_r($result);
?>