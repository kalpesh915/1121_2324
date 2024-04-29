<?php
    /*
        Modify a Cookie Value
        To modify a cookie, just set (again) the cookie using the setcookie() function
    */ 

    require_once("menu.php");

    setcookie("username", "Pooja Mori", time()+3600, "/");
    setcookie("city", "Ahamdabad", time()+3600, "/");
    setcookie("color", "Pink", time()+3600, "/");

    echo "<hr>Cookies Updated<hr>";
?>