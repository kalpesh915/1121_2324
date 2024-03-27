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
            PHP Numbers
            In this chapter we will look in depth into Integers, Floats, and Number Strings.
            There are three main numeric types in PHP: Integer, Float, Number Strings
            In addition, PHP has two more data types used for numbers: Infinity, NaN
            Variables of numeric types are created when you assign a value to them:
        */ 

        $ip1 = 10; // int
        echo "<hr>";
        var_dump($ip1);

        $ip1 = 10.10; // float
        echo "<hr>";
        var_dump($ip1);

        $ip1 = "10"; // numeric string
        echo "<hr>";
        var_dump($ip1);
    ?>
</body>
</html>