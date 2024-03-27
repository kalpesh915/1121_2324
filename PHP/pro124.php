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
            PHP has the following functions to check if the type of a variable is integer:
        */
        
        $ip1 = 10;
        echo "<hr> is_int() : ";
        var_dump(is_int($ip1));
        echo "<hr> is_integer() : ";
        var_dump(is_integer($ip1));
        echo "<hr> is_long() : ";
        var_dump(is_long($ip1));

        $ip1 = 10.10;
        echo "<hr> is_int() : ";
        var_dump(is_int($ip1));
    ?>
</body>
</html>