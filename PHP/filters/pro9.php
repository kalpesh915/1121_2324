<?php
    /*
        Sanitize and Validate a URL
    */

    $ip = "https://www.gmail.com";

    $ip = filter_var($ip, FILTER_SANITIZE_URL);

    if(filter_var($ip, FILTER_VALIDATE_URL) === $ip){
        echo "Valid ";
    }else{
        echo "Invalid";
    }
?>