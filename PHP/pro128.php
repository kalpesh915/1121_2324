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
            PHP NaN
            NaN stands for Not a Number. NaN is used for impossible mathematical operations. PHP has the following functions to check if a value is not a number: is_nan()
        */

        $ip1 = 10.10;
        echo "<hr>is_nan() : ";
        var_dump(is_nan($ip1));

        $ip1 = 1010;
        echo "<hr>is_nan() : ";
        var_dump(is_nan($ip1));
        
        $ip1 = acos(8);
        echo "<hr>is_nan() : ";
        var_dump(is_nan($ip1));
    ?>
</body>
</html>