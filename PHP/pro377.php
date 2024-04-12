<?php
    /*
        PHP usort() Function : Sort the elements of an array by values using a user-defined comparison function:
    */

    function sorting($a, $b){
        if($a == $b){
            return 0;
        }else{
            return ($a < $b ? -1 : 1);
        }
    }

    $arr = array(9, 8, 6, 3, 1, 11, 90, 56, 45, 87, 67);
    uksort($arr, "sorting");

    foreach($arr as $key => $value) {
        echo "[" . $key . "] => " . $value;
        echo "<br>";
    }
?>