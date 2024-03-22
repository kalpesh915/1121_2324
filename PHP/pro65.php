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
            PHP chunk_split() Function
            Split the string after each character and add a "." after each split:
        */

        $str = "Hello world!";
        echo chunk_split($str,2,".");
    ?>
</body>
</html>