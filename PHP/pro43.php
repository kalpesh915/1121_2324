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
            Change Data Type
            If you assign an integer value to a variable, the type will automatically be an integer.If you assign a string to the same variable, the type will change to a string:
        */

        $ip1 = 10;
        echo "<hr> Value of \$ip1 is $ip1 and type is ".gettype($ip1);
        $ip1 = 10.10;
        echo "<hr> Value of \$ip1 is $ip1 and type is ".gettype($ip1);
        $ip1 = 'Rajkot';
        echo "<hr> Value of \$ip1 is $ip1 and type is ".gettype($ip1);
        $ip1 = false;
        echo "<hr> Value of \$ip1 is $ip1 and type is ".gettype($ip1);
    ?>
</body>
</html>