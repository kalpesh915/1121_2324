<?php
    /*
        Using preg_match_all() : The preg_match_all() function will tell you how many matches were found for a pattern in a string.
    */ 

    $str1 = "welcome to world of regular expression in php 1 12 23 123 44 112 3344 55 21";
    //$pattern = "/the/i";
    //$pattern = "/o/i";
    //$pattern = "/t/i";
    $pattern = "/e/i";
    echo preg_match_all($pattern, $str1);
?>