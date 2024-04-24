<?php 
    /*
        PHP Read Single Character - fgetc() The fgetc() function is used to read a single character from a file.
    */

    $file1 = fopen("data.txt", "r") or die("Unble to open file");
    while(!feof($file1)){
        echo "<hr>".fgetc($file1);
    }
    fclose($file1);
    
?>