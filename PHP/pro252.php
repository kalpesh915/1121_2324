<?php
    /*
        Access Indexed Arrays : To access an array item you can refer to the index number.
    */ 

    ///             0           1       2
    $city = array("Rajkot", "Baroda", "Ahamdabad", "Bhuj", "Jamnagar");

    echo "<hr> Welcome to {$city[0]}";
    $city[0] = "RAJULA";
    echo "<hr> Welcome to {$city[0]}";

?>