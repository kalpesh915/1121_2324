<?php 
    /*
        PHP File Open/Read/Close
        In this chapter we will teach you how to open, read, and close a file on the server.
        PHP Open File - fopen()
        A better method to open files is with the fopen() function. This function gives you more options than the readfile() function.

        The first parameter of fopen() contains the name of the file to be opened and the second parameter specifies in which mode the file should be opened.
    */

    $file1 = fopen("data.txt", "r") or die("Unble to open file");
    echo fread($file1, 200);
    fclose($file1);

    /*
    The file may be opened in one of the following modes:
    Modes 	Description
    r 	    Open a file for read only. File pointer starts at the beginning of the file 
    w 	    Open a file for write only. Erases the contents of the file or creates a new 
            file if it doesn't exist. File pointer starts at the beginning of the file
    a 	    Open a file for write only. The existing data in file is preserved. File    
            pointer starts at the end of the file. Creates a new file if the file doesn't exist
    x 	    Creates a new file for write only. Returns FALSE and an error if file already 
            exists
    r+ 	    Open a file for read/write. File pointer starts at the beginning of the file
    w+ 	    Open a file for read/write. Erases the contents of the file or creates a new 
            file if it doesn't exist. File pointer starts at the beginning of the file
    a+ 	    Open a file for read/write. The existing data in file is preserved. File    
            pointer starts at the end of the file. Creates a new file if the file doesn't exist
    x+ 	    Creates a new file for read/write. Returns FALSE and an error if file already  
            exists
    */
?>