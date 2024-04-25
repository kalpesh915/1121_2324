<?php
    session_start();

    require_once("menu.php");

    if(isset($_SESSION["username"])){
        echo "<hr> Welcome ".$_SESSION["username"];
    }else{
        echo "<hr> Welcome Guest";
    }
?>