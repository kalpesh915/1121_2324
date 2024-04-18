<?php
    /*
        [0-9] 	Find any digits
    */ 

    $str1 = "welcomE to world of regular expression in php 1 12 23 123 44 112 3344 55 21 67 78 889 ";
    $pattern = "/[0-9]/"; 

    echo "<hr> $str1";
    echo "<hr>".preg_replace($pattern, "*", $str1);
?>