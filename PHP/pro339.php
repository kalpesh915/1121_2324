<?php
    /*
        PHP array_replace_recursive() Function
        Replace the values of the first array with the values from the second array recursively:
    */ 
    

    $animals1 = ["key1"=>array("Lion"), "key2" => array("Deer", "Tiger", "Cow", "Horse")];
    //$animals2 = ["key1"=>array("Elephant"), "key2" => array("Monkey", "Donkey", "Elegator")];
    $animals2 = ["key1"=>array("Elephant"), "key2" => array("Monkey")];

    $answer = array_replace_recursive($animals1, $animals2);

    print_r($answer);
?>
