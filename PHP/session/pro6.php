<?php
    session_start();

    require_once("menu.php");

    if(isset($_SESSION["username"])){
        unset($_SESSION["username"]);
    }

    echo "<hr> Session Deleted";
?>