<?php
    /*
        Excecute a Function Item
        Array items can be of any data type, including function.
        To execute such a function, use the index number followed by parentheses ():
    */ 

    function greetings(){
        echo "<hr> Welcome to PHP Arrays";
    }

    $city = ["Rajkot", "Surat", "Baroda", "greetings"];
    
    //$city[3];
    $city[3]();
?>