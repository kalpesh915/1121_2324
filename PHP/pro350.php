<?php
    /*
        array_uintersect_assoc() 	Compare arrays, and returns the matches (compare keys and values, using a built-in function to compare the keys and a user-defined function to compare the values)
    */ 

    function compare($ip1, $ip2){
        if($ip1 == $ip2){
            return 0;
        }else{
            return ($ip1 > $ip2) ? 1 : -1;
        }
    }

    $array1 = array("a"=>"red","b"=>"green","c"=>"blue");
    $array2 = array("a"=>"purple","b"=>"green","e"=>"ornage");

    $result = array_uintersect_assoc($array1, $array2, "compare");

    print_r($result);
?>