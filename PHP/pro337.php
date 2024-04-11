<?php
    /*
        array_reduce() 	Returns an array as a string, using a user-defined function
    */ 
    
    function joinData($tmp1, $tmp2){
        return $tmp1." - ".$tmp2;
    }

    $animals = ["Lion", "Deer", "Tiger", "Cow", "Horse", "Elephant", "Monkey", "Donkey", "Elegator"];

    $answer = array_reduce($animals, "joinData");

    echo $answer;
?>
