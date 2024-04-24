<?php 
    /*
        PHP Overwriting
        Now that "data1.txt" contains some data we can show what happens when we open an existing file for writing. All the existing data will be ERASED and we start with an empty file.
    */

    $file1 = fopen("data1.txt", "w") or die("Unble to open file");
    fwrite($file1, "Welcome to world of file handling with php\n");
    fwrite($file1, "Welcome to world of file handling with php\n");
    fwrite($file1, "Welcome to world of file handling with php\n");
    fwrite($file1, "Welcome to world of file handling with php\n");
    fwrite($file1, "Welcome to world of file handling with php\n");
    echo "<hr>Data Writing Completed<hr>";
    fclose($file1);
    
?>