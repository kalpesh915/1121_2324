<?php
    /*
        Passing Arguments by Reference
        In PHP, arguments are usually passed by value, which means that a copy of the value is used in the function and the variable that was passed into the function cannot be changed.
        When a function argument is passed by reference, changes to the argument also change the variable that was passed in. To turn a function argument into a reference, the & operator is used:

        example : Passing argument by value
    */ 

    function add10($ip1){
        $ip1 = $ip1 + 10; // local variable for add10 function
        echo "<hr> Between function call \$ip1 is $ip1";
    }

    $ip1 = 10;
    echo "<hr> Before function call \$ip1 is $ip1";
    add10($ip1);
    echo "<hr> After function call \$ip1 is $ip1";
?>