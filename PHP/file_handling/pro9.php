<?php 
    /*
        PHP File Create/Write
        PHP Create File - fopen()
        The fopen() function is also used to create a file. Maybe a little confusing, but in PHP, a file is created using the same function used to open files.
        If you use fopen() on a file that does not exist, it will create it, given that the file is opened for writing (w) or appending (a).

        PHP File Permissions
        If you are having errors when trying to get this code to run, check that you have granted your PHP file access to write information to the hard drive.
    
        PHP Write to File - fwrite()
        The fwrite() function is used to write to a file.
        The first parameter of fwrite() contains the name of the file to write to and the second parameter is the string to be written.
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