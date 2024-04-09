<?php
    /*
        Update Array Items in a Foreach Loop. There are different techniques to use when changing item values in a foreach loop. One way is to insert the & character in the assignment to assign the item value by reference, and thereby making sure that any changes done with the array item inside the loop will be done to the original array:
    */ 

    $students = ["brijesh", "ansh", "meet", "krishil", "alan", "sanjana", "pooja"];

    echo "<hr>Original Array is :<hr>";
    print_r($students);

    foreach($students as &$tmp){
        $tmp = strtoupper($tmp);
    }

    echo "<hr>Updated Array is :<hr>";
    print_r($students);

    // unset($tmp); // delete $tmp variable
    // echo "<hr> \$tmp after foreach loop is $tmp";
    
    /*
        Note: Remember to add the unset() function after the loop.
        Without the unset($x) function, the $x variable will remain as a reference to the last array item. To demonstrate this, see what happens when we change the value of $x after the foreach loop:
    */ 
    
?>