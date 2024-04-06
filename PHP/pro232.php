<?php
    /*
        Functions
        The real power of PHP comes from its functions. 
        PHP has more than 1000 built-in functions, and in addition you can create your own custom functions.
        PHP Built-in Functions : PHP has over 1000 built-in functions that can be called directly, from within a script, to perform a specific task.

        PHP User Defined Functions
        Besides the built-in PHP functions, it is possible to create your own functions.

        A function is a block of statements that can be used repeatedly in a program.
        A function will not execute automatically when a page loads.
        A function will be executed by a call to the function.

        Create a Function : A user-defined function declaration starts with the keyword function, followed by the name of the function:

        function myMessage() {
            echo "Hello world!";
        }
    */ 

    function greetings(){
        echo "<hr> Welcome, Good Morning";
    }

    greetings(); // call
    greetings();
    greetings();

    /* Note: A function name must start with a letter or an underscore. Function names are NOT case-sensitive.

     Tip: Give the function a name that reflects what the function does!

     The opening curly brace { indicates the beginning of the function code, and the closing curly brace } indicates the end of the function. */

    
?>