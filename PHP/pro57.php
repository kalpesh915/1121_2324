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
        echo "<hr>".substr($ip1, 20);
        echo "<hr>".substr($ip1, -20);
        // Note The last character has index -1.

        //  Use negative length to specify how many characters to omit, starting from the end of the string:

        echo "<hr>".substr($ip1, 10, -10);
    ?>
</body>
</html>