<?php
    /*
        Variable Number of Arguments
        By using the ... operator in front of the function parameter, the function accepts an unknown number of arguments. This is also called a variadic function.

        You can only have one argument with variable length, and it has to be the last argument.
    */ 

    function sum($ip1, ...$values){
        $ans = 0;
        foreach($values as $tmp){
            $ans += $tmp;
        }
        echo "<hr> Sum is $ans";
    }

    /*function sum(...$values, $ip1){
        $ans = 0;
        foreach($values as $tmp){
            $ans += $tmp;
        }
        echo "<hr> Sum is $ans";
    }*/

    sum(11, 22);
    sum(11, 22, 33);
    sum(11, 22, 33, 44);
    sum(11, 22, 33, 44, 55);
    sum(11, 22, 33, 44, 55, 66);
    sum(11, 22, 33, 44, 55, 66, 77);
    sum(11, 22, 33, 44, 55, 66, 77, 88);
    sum(11, 22, 33, 44, 55, 66, 77, 88, 99);
?>