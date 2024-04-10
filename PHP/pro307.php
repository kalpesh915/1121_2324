<?php
    /*
        PHP array_count_values() Function : Count all the values of an array:
    */ 

    $students = array("Pooja", "Sanjana", "Meet", "Ansh", "Brijesh", "Krishil", "Alan", "Pooja", "Sanjana", "Krishil", "Brijesh");
    

    $result = array_count_values($students);

    print_r($result);
?>