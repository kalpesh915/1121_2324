<?php
    /*
        PHP array_combine() Function
    */ 

    $students = array("Pooja", "Sanjana", "Meet", "Ansh", "Brijesh", "Krishil", "Alan");
    $roll = array(111, 278, 432, 114, 321, 897, 435);

    $result = array_combine($roll, $students);

    print_r($result);
?>