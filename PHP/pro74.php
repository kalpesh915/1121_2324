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
            PHP htmlentities() Function
            Convert some characters to HTML entities: 
        */

        $str = '<a href="https://www.w3schools.com">Go to w3schools.com</a>';
        echo htmlentities($str);
    ?>
</body>
</html>