<?php
/*
        PHP compact() Function
        Create an array from variables and their values:
    */

    $firstname = "Peter";
    $lastname = "Griffin";
    $age = "41";
    $city = "Rajkot";

    $result = compact("firstname", "lastname", "age", "city");

    echo count($result);
?>