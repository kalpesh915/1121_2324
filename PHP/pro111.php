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
        PHP strnatcmp() Function
        Compare two strings using a "natural" algorithm (case-sensitive):
    */

    echo strnatcmp("2Hello world!","10Hello WORLD!");
    echo "<br>";
    echo strnatcmp("10Hello world!","2Hello WORLD!");
    echo "<br>";
    echo strnatcmp("2Hello world!","2Hello WORLD!");
    ?>
</body>

</html>