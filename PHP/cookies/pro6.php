<?php
    /*
        Delete a Cookie
        To delete a cookie, use the setcookie() function with an expiration date in the past:
    */ 

    require_once("menu.php");

    setcookie("username", "", time()-3600, "/");

    echo "<hr>Cookies Deleted";
?>