<?php
    /*
        PHP File Handling
        File handling is an important part of any web application. You often need to open and process a file for different tasks.
        PHP Manipulating Files : PHP has several functions for creating, reading, uploading, and editing files.
        Be careful when manipulating files! : When you are manipulating files you must be very careful. You can do a lot of damage if you do something wrong. Common errors are: editing the wrong file, filling a hard-drive with garbage data, and deleting the content of a file by accident.
    */ 

    /*
        PHP readfile() Function : The readfile() function reads a file and writes it to the output buffer.
    */

    readfile("data.txt");
?>