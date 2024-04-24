<?php 
    /*
        
    */

    $file1 = fopen("data.txt", "r") or die("Unble to open file");
    echo "<hr>Current File Pointer at ".ftell($file1);
    echo "<hr>".fgets($file1);
    echo "<hr>Current File Pointer at ".ftell($file1);
    echo "<hr>".fgets($file1);
    echo "<hr>Current File Pointer at ".ftell($file1);
    fclose($file1);
    
?>