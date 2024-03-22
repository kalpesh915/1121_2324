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
            PHP - Slicing Strings
            Slicing
            You can return a range of characters by using the substr() function. Specify the start index and the number of characters you want to return.
        */

              //0123456789012345678901234567890123
        $ip1 = "welcome to world of Strings in PHP";
        echo "<hr>".substr($ip1, 1, 10);
        echo "<hr>".substr($ip1, 0, 10);
        echo "<hr>".substr($ip1, 10, 10);
        echo "<hr>".substr($ip1, -10, 10);
        // Note The first character has index 0.
    ?>
</body>
</html>