<?php
    /*
        uksort() 	Sorts an array by keys using a user-defined comparison function
    */

    function sorting($a, $b){
        if($a == $b){
            return 0;
        }else{
            return ($a < $b ? -1 : 1);
        }
    }

    $arr = array("a"=>4, "b"=>2, "c"=>8, "d"=>6, "e"=>10, "f"=>15);
    uksort($arr, "sorting");

    print_r($arr);
?>