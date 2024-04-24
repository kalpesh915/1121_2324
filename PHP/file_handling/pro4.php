<?php 
    /*
        PHP Read Single Line - fgets()
        The fgets() function is used to read a single line from a file.
    */

    $file1 = fopen("data.txt", "r") or die("Unble to open file");
    echo fgets($file1);
    echo fgets($file1);
    echo fgets($file1);
    echo fgets($file1);
    echo fgets($file1);
    fclose($file1);
    
?>