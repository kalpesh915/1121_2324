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
            Search For Text Within a String
            The PHP strpos() function searches for a specific text within a string.
            If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.
        */

              //0123456789012345678901234567890123
        $ip1 = "Welcome to world of Strings in PHP";

        echo strpos($ip1, "of");
    ?>
</body>
</html>