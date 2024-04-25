<?php
    session_start();
    require_once("menu.php");

    echo "<hr> Welcome ".$_SESSION["username"]." From ".$_SESSION["city"]." Color is ".$_SESSION["color"];
?>