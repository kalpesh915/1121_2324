<?php 
    /*
        Note: After a call to the fgets() function, the file pointer has moved to the next line.
        PHP Check End-Of-File - feof()
        The feof() function checks if the "end-of-file" (EOF) has been reached. The feof() function is useful for looping through data of unknown length.
    */

    $file1 = fopen("data.txt", "r") or die("Unble to open file");
    while(!feof($file1)){
        echo "<hr>".fgets($file1);
    }
    fclose($file1);
    
?>