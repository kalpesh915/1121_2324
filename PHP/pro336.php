<?php
    /*
        array_rand() 	Returns one or more random keys from an array
    */ 
    
    $animals = ["Lion", "Deer", "Tiger", "Cow", "Horse", "Elephant", "Monkey", "Donkey", "Elegator"];

    $keys = array_rand($animals, 2);

    echo "<hr> Random Animal is ".$animals[$keys[0]];
    echo "<hr> Random Animal is ".$animals[$keys[1]];
?>
