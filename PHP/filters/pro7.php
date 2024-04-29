<?php
    /*
        Validate an IP Address
        0 to 255
    */

    $ip = "192.168.11.211";
    //$ip = "192.168.11.311";

    if(filter_var($ip, FILTER_VALIDATE_IP) === $ip){
        echo "Valid ";
    }else{
        echo "Invalid";
    }
?>