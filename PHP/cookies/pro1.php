<?php
    /*
        What is a Cookie?
        A cookie is often used to identify a user. A cookie is a small file that the server embeds on the user's computer. Each time the same computer requests a page with a browser, it will send the cookie too. With PHP, you can both create and retrieve cookie values.

        Create Cookies With PHP
        A cookie is created with the setcookie() function.
        Syntax : setcookie(name, value, expire, path, domain, secure, httponly);
        Only the name parameter is required. All other parameters are optional.
    */ 

    require_once("menu.php");

    // create cookies for 30 seconds
    setcookie("username", "Meet Sinojiya", time()+30, "/");
    setcookie("city", "Morbi", time()+3600, "/");
    setcookie("color", "Brown", time()+3600, "/");

    echo "<hr>Cookies Created<hr>";
?>