<?php
    /*
        Using preg_replace() : The preg_replace() function will replace all of the matches of the pattern in a string with another string.
    */ 

    $str1 = "welcome to world of regular expression in php 1 12 23 123 44 112 3344 55 21";
    $pattern = "/e/i";

    echo "<hr> $str1";
    echo "<hr>".preg_replace($pattern, "E", $str1);
    // preg_replace(pattern, replace with, replace in)
?>