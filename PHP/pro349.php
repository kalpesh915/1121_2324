<?php
    /*
        array_uintersect() 	Compare arrays, and returns the matches (compare values only, using a user-defined key comparison function)
    */ 

    function compare($ip1, $ip2){
        if($ip1 == $ip2){
            return 0;
        }else{
            return ($ip1 > $ip2) ? 1 : -1;
        }
    }

    $array1 = array("a"=>"red","b"=>"green","c"=>"blue");
    $array2 = array("a"=>"red","b"=>"green","e"=>"ornage");

    $result = array_uintersect($array1, $array2, "compare");

    print_r($result);
?>