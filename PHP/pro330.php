<?php
    /*
        PHP array_multisort() Function
        Return a sorted array in ascending order:
    */ 
    
    $animals = array("Dog","Cat","Horse","Bear","Zebra", "Lion", "Tigar", "Wolf");
    array_multisort($animals);
    print_r($animals);
?>
