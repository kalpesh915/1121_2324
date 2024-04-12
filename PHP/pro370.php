<?php
    /*
        PHP natcasesort() Function

        Sort an array by using natsort() and natcasesort():
    */

    $temp_files = array("temp15.txt","Temp10.txt","temp1.txt","Temp22.txt","temp2.txt");

    natsort($temp_files);
    echo "Natural order: ";
    print_r($temp_files);
    echo "<hr />";

    natcasesort($temp_files);
    echo "Natural order: ";
    print_r($temp_files);
    echo "<hr />";
?>