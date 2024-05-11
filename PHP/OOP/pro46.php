<?php
    /*
        PHP - What is an Iterable?
        An iterable is any value which can be looped through with a foreach() loop.
        The iterable pseudo-type was introduced in PHP 7.1, and it can be used as a data type for function arguments and function return values.
    */

    function printer(iterable $student){
        foreach($student as $tmp){
            echo "<hr> Welcome $tmp";
        }   
    }

    $data = ["Brijesh", "Bhalabahi", "Alan", "Krishil", "Meet", "Ansh", "Pooja", "Sanjana"];

    printer($data);
?>