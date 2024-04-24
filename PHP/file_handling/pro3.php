<?php 
    /*
        PHP Read File - fread()
        The fread() function reads from an open file.
        The first parameter of fread() contains the name of the file to read from and the second parameter specifies the maximum number of bytes to read.
    */

    $file1 = fopen("data.txt", "r") or die("Unble to open file");
    //echo fread($file1, 100);
    echo fread($file1, filesize("data.txt"));
    fclose($file1);
    
    /*
        PHP Close File - fclose()
        The fclose() function is used to close an open file.
        It's a good programming practice to close all files after you have finished with them. You don't want an open file running around on your server taking up resources!
    */
?>