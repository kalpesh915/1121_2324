<?php
    /*
        n{3} 	Matches any string that contains a sequence of 3 n's
    */ 

    $str1 = "welcome to world of regular expression in php 1 11 111 1111 12 23 123  44 112 3344 55 21 67 78 889 php";
    
    $pattern = "/1{2}/"; 

    echo "<hr> $str1";
    echo "<hr>".preg_replace($pattern, "*", $str1);
?>