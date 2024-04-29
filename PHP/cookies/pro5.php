<?php
    /*
        check cookies
    */ 

    require_once("menu.php");

    if(isset($_COOKIE["username"])){
        echo "<hr>Welcome ".$_COOKIE["username"]."<hr>";
    }else{
        echo "<hr>Welcome Guest<hr>";
    }
?>