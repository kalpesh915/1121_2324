<?php
    /*
        Validate an Integer Within a Range
    */

    $ip = 105;


    if(filter_var($ip, FILTER_VALIDATE_INT, array("options" => array("min_range" => 0, "max_range" => 100))) === $ip){
        echo "Valid ";
    }else{
        echo "Invalid";
    }
?>