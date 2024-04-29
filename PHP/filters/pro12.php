<?php
    /*
        Validate URL - Must Contain QueryString
    */

    //$ip = "https://www.google.com?q=rajkot";
    $ip = "https://www.google.com";

    $ip = filter_var($ip, FILTER_SANITIZE_URL);

    if(filter_var($ip, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === $ip){
        echo "Valid ";
    }else{
        echo "Invalid";
    }
?>