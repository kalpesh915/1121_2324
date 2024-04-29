<?php
    /*
        Sanitize and Validate an Email Address
    */

    //$ip = "demo1@gma#$%%il.com";
    $ip = "demo1@gmail.com";

    $ip = filter_var($ip, FILTER_SANITIZE_EMAIL);

    if(filter_var($ip, FILTER_VALIDATE_EMAIL) === $ip){
        echo "Valid ";
    }else{
        echo "Invalid";
    }
?>