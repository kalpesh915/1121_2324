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
            PHP has the following functions to check if the type of a variable is float:
                is_float(), is_double() - alias of is_float()
        */

        $ip1 = 10.10;
        echo "<hr>is_float() : ";
        var_dump(is_float($ip1));

        $ip1 = 10.10;
        echo "<hr>is_double() : ";
        var_dump(is_double($ip1));

        $ip1 = 1010; // integer
        echo "<hr>is_float() : ";
        var_dump(is_float($ip1));
    ?>
</body>
</html>