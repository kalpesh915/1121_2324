<?php
    /*
        | 	Find a match for any one of the patterns separated by | as in: cat|dog|fish
    */ 

    $str1 = "welcomE to world of regular expression in php 1 12 23 123 44 112 3344 55 21 67 78 889 ";
    $pattern = "/(to|of)/"; 

    echo "<hr> $str1";
    echo "<hr>".preg_replace($pattern, "*", $str1);
?>