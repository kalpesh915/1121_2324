<?php
    /*
        shuffle() 	Shuffles an array
    */

    $array1 = ["Hyundai", "Honda", "Toyoya", "Mahindra", "Tata"];

    shuffle($array1);

    print_r($array1);

    echo "<hr>".sizeof($array1);
?>