<?php
    /*
        array_udiff() 	Compare arrays, and returns the differences (compare values only, using a user-defined key comparison function)
    */ 

    function compare($ip1, $ip2){
        if($ip1 == $ip2){
            return 0;
        }else{
            return ($ip1 > $ip2) ? 1 : -1;
        }
    }

    $array1 = array("a"=>"red","b"=>"green","c"=>"blue");
    $array2 = array("a"=>"blue","b"=>"black","e"=>"blue");

    $result = array_udiff($array1, $array2, "compare");

    print_r($result);
?>