<?php
    /*
        What is a Regular Expression?
        A regular expression is a sequence of characters that forms a search pattern. When you search for data in a text, you can use this search pattern to describe what you are searching for. A regular expression can be a single character, or a more complicated pattern. Regular expressions can be used to perform all types of text search and text replace operations.

        Syntax : In PHP, regular expressions are strings composed of delimiters, a pattern and optional modifiers.
        $exp = "/w3schools/i";

        In the example above, / is the delimiter, w3schools is the pattern that is being searched for, and i is a modifier that makes the search case-insensitive.

        The delimiter can be any character that is not a letter, number, backslash or space. The most common delimiter is the forward slash (/), but when your pattern contains forward slashes it is convenient to choose other delimiters such as # or ~.

        Regular Expression Functions : PHP provides a variety of functions that allow you to use regular expressions. The most common functions are:
        Function 	        Description
        preg_match() 	    Returns 1 if the pattern was found in the string and 0 if not
        preg_match_all() 	Returns the number of times the pattern was found in the string, 
                            which may also be 0
        preg_replace() 	    Returns a new string where matched patterns have been replaced with 
                            another string
    */ 

    /*
        Using preg_match() : The preg_match() function will tell you whether a string contains matches of a pattern.
    */ 

    $str1 = "welcome to world of regular expression in php 1 12 23 123 44 112 3344 55 21";
    //$pattern = "/of/i";
    //$pattern = "/on/i";
    $pattern = "/the/i";

    echo preg_match($pattern, $str1);
?>