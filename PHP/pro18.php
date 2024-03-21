<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*
            PHP is a Loosely Typed Language
            In the example above, notice that we did not have to tell PHP which data type the variable is.
            PHP automatically associates a data type to the variable, depending on its value. Since the data types are not set in a strict sense, you can do things like adding a string to an integer without causing an error.
            In PHP 7, type declarations were added. This gives an option to specify the data type expected when declaring a function, and by enabling the strict requirement, it will throw a "Fatal Error" on a type mismatch.

            Variable Types
            PHP has no command for declaring a variable, and the data type depends on the value of the variable.
        */ 

        $user = "Krishil";
        $year = 2024;

        echo $user;
        echo $year;
        
    ?>
</body>
</html>