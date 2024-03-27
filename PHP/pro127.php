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
            PHP Infinity
            A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.
            PHP has the following functions to check if a numeric value is finite or infinite:
            is_finite(), is_infinite()

        */

        $ip1 = 10.10;
        echo "<hr>is_finite() : ";
        var_dump(is_finite($ip1));

        $ip1 = 10e307;
        echo "<hr>is_finite() : ";
        var_dump(is_finite($ip1));

        $ip1 = 10e510;
        echo "<hr>is_finite() : ";
        var_dump(is_finite($ip1));
    ?>
</body>
</html>