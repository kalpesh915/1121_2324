<?php 
    /*
        PHP Append Text
        You can append data to a file by using the "a" mode. The "a" mode appends text to the end of the file, while the "w" mode overrides (and erases) the old content of the file.
    */

    $file1 = fopen("data2.txt", "a") or die("Unble to open file");
    fwrite($file1, "Welcome to world of file handling with php\n");
    fwrite($file1, "Welcome to world of file handling with php\n");
    fwrite($file1, "Welcome to world of file handling with php\n");
    fwrite($file1, "Welcome to world of file handling with php\n");
    fwrite($file1, "Welcome to world of file handling with php\n");
    echo "<hr>Data Writing Completed<hr>";
    fclose($file1);
    
?>