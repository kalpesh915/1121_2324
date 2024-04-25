<?php
    session_start();

    require_once("menu.php");
    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy(); 

    echo "<hr>Session Destroyed<hr>";
?>