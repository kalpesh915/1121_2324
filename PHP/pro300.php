<?php
    /*
        PHP Multidimensional Arrays
        In the previous pages, we have described arrays that are a single list of key/value pairs.However, sometimes you want to store values with more than one key. For this, we have multidimensional arrays.
        PHP - Multidimensional Arrays
        A multidimensional array is an array containing one or more arrays. PHP supports multidimensional arrays that are two, three, four, five, or more levels deep. However, arrays more than three levels deep are hard to manage for most people.

        The dimension of an array indicates the number of indices you need to select an element
        For a two-dimensional array you need two indices to select an element
        For a three-dimensional array you need three indices to select an element

        PHP - Two-dimensional Arrays
        A two-dimensional array is an array of arrays (a three-dimensional array is an array of arrays of arrays).
    */ 

    $students = array(
        ///   0      1
        array("1", "Pooja", "Mori", "Rajkot", "Gujarat"), // 0
        array("2", "Sanjana", "Sonagra", "Rajkot", "Gujarat"), // 1
        array("3", "Krishil", "Trivedi", "Rajkot", "Gujarat"), // 2
        array("4", "Brijesh", "Miatra", "Rajkot", "Gujarat")   // 3
    );


    echo "<hr>Welcome ".$students[0][1]." ".$students[0][2]." City is ".$students[0][3]." Roll ".$students[0][0];

    echo "<hr>Welcome ".$students[1][1]." ".$students[1][2]." City is ".$students[1][3]." Roll ".$students[1][0];

    echo "<hr>Welcome ".$students[2][1]." ".$students[2][2]." City is ".$students[2][3]." Roll ".$students[2][0];

    echo "<hr>Welcome ".$students[3][1]." ".$students[3][2]." City is ".$students[3][3]." Roll ".$students[3][0];
?>