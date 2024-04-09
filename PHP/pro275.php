<?php
    /*
        To update items from an associative array, use the key name:
    */ 

    $students = ["fname"=>"Brijesh", "lname"=>"Miatra","city"=>"Rajkot" ];

    echo "<hr> Original Array is <hr>";
    print_r($students);

    $students["fname"] = "BRIJESH";
    $students["lname"] = "MIATRA";

    echo "<hr> Updated Array is <hr>";
    print_r($students);
?>