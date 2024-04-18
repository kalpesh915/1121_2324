<?php
    /*
        n{2, 5} Matches any string that contains a sequence of at least 2, but not more that 5 n's
    */ 

    $str1 = " 1 11 111 1111 12 23 123  44 112 3344 55 21 67 78 889 php";
    
    $pattern = "/1{1,3}/"; 

    echo "<hr> $str1";
    echo "<hr>".preg_replace($pattern, "*", $str1);
?>