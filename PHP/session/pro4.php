<?php
    session_start();

    require_once("menu.php");

    $_SESSION["username"] = "Ansh Amrutiya";
    $_SESSION["city"] = "Ahamdabad";
    $_SESSION["state"] = "Gujarat";
    $_SESSION["color"] = "Blue";

    echo "<hr>Session Value Updated<hr>";
?>