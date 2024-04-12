<?php
    /*
        array_udiff_uassoc() 	Compare arrays, and returns the differences (compare keys and values, using two user-defined key comparison functions)
    */ 

    function compare_key($ip1, $ip2){
        if($ip1 == $ip2){
            return 0;
        }else{
            return ($ip1 > $ip2) ? 1 : -1;
        }
    }

    function compare_value($ip1, $ip2){
        if($ip1 == $ip2){
            return 0;
        }else{
            return ($ip1 > $ip2) ? 1 : -1;
        }
    }

    $array1 = array("a"=>"red","b"=>"green","c"=>"blue");
    $array2 = array("a"=>"red","b"=>"green","e"=>"blue");

    $result = array_udiff_uassoc($array1, $array2, "compare_value", "compare_key");

    print_r($result);
?>