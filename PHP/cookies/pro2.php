<?php
    /*
        Read Cookies
        We then retrieve the value of the cookie "user" (using the global variable $_COOKIE). We also use the isset() function to find out if the cookie is set:
    */ 

    require_once("menu.php");

    echo "<hr>Cookies Data is ".$_COOKIE["username"]."<hr>";
?>