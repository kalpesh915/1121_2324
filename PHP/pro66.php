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
            PHP convert_uuencode() Function
        */

        $str = "Hello world!";
        echo convert_uuencode($str);

        echo "<hr>";
        echo convert_uudecode(",2&5L;&\@=V]R;&0A `");
    ?>
</body>
</html>