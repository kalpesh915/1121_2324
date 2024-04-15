<?php
    /*
        PHP - $_SERVER
        $_SERVER is a PHP super global variable which holds information about headers, paths, and script locations. The example below shows how to use some of the elements in $_SERVER:
    */ 

    echo "<hr>".$_SERVER["PHP_SELF"];
    echo "<hr>".$_SERVER["SERVER_NAME"];
    echo "<hr>".$_SERVER["HTTP_HOST"];
    //echo "<hr>".$_SERVER["HTTP_REFERER"];
    echo "<hr>".$_SERVER["HTTP_USER_AGENT"];
    echo "<hr>".$_SERVER["SCRIPT_NAME"];
?>