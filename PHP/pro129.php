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
        PHP Numerical Strings : The PHP is_numeric() function can be used to find whether a variable is numeric. The function returns true if the variable is a number or a numeric string, false otherwise.
        */

        $ip1 = 1010;
        echo "<hr>is_numeric() : ";
        var_dump(is_numeric($ip1));

        $ip1 = 10.10;
        echo "<hr>is_numeric() : ";
        var_dump(is_numeric($ip1));

        $ip1 = "1010";
        echo "<hr>is_numeric() : ";
        var_dump(is_numeric($ip1));

        $ip1 = "31 december";
        echo "<hr>is_numeric() : ";
        var_dump(is_numeric($ip1));

        $ip1 = "december 31";
        echo "<hr>is_numeric() : ";
        var_dump(is_numeric($ip1));

        $ip1 = true;
        echo "<hr>is_numeric() : ";
        var_dump(is_numeric($ip1));
    ?>
</body>
</html>