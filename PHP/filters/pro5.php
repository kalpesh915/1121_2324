<?php
    /*
        Validate an Integer
    */

    $ip = 0;

    if(!filter_var($ip, FILTER_VALIDATE_INT) === false){
        echo "Valid ";
    }else{
        echo "Invalid";
    }
?>