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
        PHP strcoll() Function
    */

    setlocale(LC_COLLATE, 'NL');
    echo strcoll("Hello World!", "Hello World!");
    echo "<br>";

    setlocale(LC_COLLATE, 'en_US');
    echo strcoll("Hello World!", "Hello World!");

    ?>
</body>

</html>