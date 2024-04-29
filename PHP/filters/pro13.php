<?php
    /*
        Remove Characters With ASCII Value > 127
    */

    $ip = "<h1>Hello WorldÆØÅ!</h1>";

    $ip = filter_var($ip, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

    echo $ip;
?>