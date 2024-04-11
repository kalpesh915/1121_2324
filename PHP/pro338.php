<?php
    /*
        array_replace() 	Replaces the values of the first array with the values from following arrays
    */ 
    

    $animals1 = ["Lion", "Deer", "Tiger", "Cow", "Horse"];
    $animals2 = ["Elephant", "Monkey", "Donkey", "Elegator"];

    $answer = array_replace($animals1, $animals2);

    print_r($answer);
?>
