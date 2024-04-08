<?php
    /*
        PHP Arrays : An array stores multiple values in one single variable:
    */ 

    $city = array("Rajkot", "Baroda", "Ahamdabad", "Bhuj", "Jamnagar");

    //echo $city;
    //var_dump($city);
    print_r($city);

    /*
        What is an Array? : An array is a special variable that can hold many values under a single name, and you can access the values by referring to an index number or name.
    */ 

    //echo "<hr> Welcome to ".$city[0];
    echo "<hr> Welcome to {$city[0]}";

    /*
        PHP Array Types : In PHP, there are three types of arrays:
        Indexed arrays - Arrays with a numeric index
        Associative arrays - Arrays with named keys
        Multidimensional arrays - Arrays containing one or more arrays

        Working With Arrays
        In this tutorial you will learn how to work with arrays, including:
        Create Arrays, Access Arrays, Update Arrays, Add Array Items, Remove Array Items, Sort Arrays

    */ 
?>