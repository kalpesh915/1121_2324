<?php
    /*
        Validate IPv6 Address
        0-9 / A-F
    */

    $ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7330";


    if(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === $ip){
        echo "Valid ";
    }else{
        echo "Invalid";
    }
?>