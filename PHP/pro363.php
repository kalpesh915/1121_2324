<?php
    /*
        current() 	Returns the current element in an array
        next() 	Advance the internal array pointer of an array
        prev() 	Rewinds the internal array pointer
        reset() 	Sets the internal pointer of an array to its first element
        end() 	Sets the internal pointer of an array to its last 
    */

    $students = ["Ansh", "Alan", "Brijesh", "Krishil", "Pooja", "Meet", "Sanjana"];

    echo "<hr>".current($students);
    echo "<hr>".next($students);
    echo "<hr>".end($students);
    echo "<hr>".prev($students);
    echo "<hr>".reset($students);
?>