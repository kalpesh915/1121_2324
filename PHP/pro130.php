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
            PHP Casting Strings and Floats to Integers
            Sometimes you need to cast a numerical value into another data type.
        */

        $ip1 = 10.10; // float
        echo "<hr>";
        var_dump($ip1);


        $ip2 = (int) $ip1; // type casting (float to int)
        echo "<hr>";
        var_dump($ip2);

        $ip2 = (integer) $ip1; // type casting (float to int)
        echo "<hr>";
        var_dump($ip2);

        $ip2 = intval($ip1); // type casting (float to int)
        echo "<hr>";
        var_dump($ip2);
    ?>
</body>
</html>