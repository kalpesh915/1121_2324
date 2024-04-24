<?php 
    /*
        X = no create mode
        if file is not exist x mode create new file for writing, if file is exist x mode return error
    */

    $file1 = fopen("data3.txt", "x") or die("Unble to open file");
    fwrite($file1, "Welcome to world of file handling with php\n");
    fwrite($file1, "Welcome to world of file handling with php\n");
    fwrite($file1, "Welcome to world of file handling with php\n");
    fwrite($file1, "Welcome to world of file handling with php\n");
    fwrite($file1, "Welcome to world of file handling with php\n");
    echo "<hr>Data Writing Completed<hr>";
    fclose($file1);
    
?>