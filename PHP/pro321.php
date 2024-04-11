<?php
    /*
        array_intersect_ukey() 	Compare arrays, and returns the matches (compare keys only, using a user-defined key comparison function)
    */ 
    function compare($ip1, $ip2){
        if($ip1 == $ip2){
            return 0;
        }else{
            return ($ip1 > $ip2) ? 1 : -1;
        }
    }

    $array1 = ["key1" => "Rajkot", "key2" => "Surat", "key3" => "Ahamdabad"];
    //$array2 = ["key1" => "Rajkot", "key2" => "Surat", "key3" => "Bhuj"];
    $array2 = ["key1" => "Rajkot", "key2" => "Surat", "key4" => "Ahamdabad"];
    

    $result = array_intersect_ukey($array1, $array2, "compare");

    print_r($result);
?>
