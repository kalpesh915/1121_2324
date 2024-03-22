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
            crypt();
        */

        echo "<hr>".crypt("alanthomas", "demo");
        echo "<hr>".crypt("alanthomas", "test");
        echo "<hr>".crypt("alanthomas", "data");
        echo "<hr>".crypt("alanthomas", "try1");
        echo "<hr>".crypt("alanthomas", "none");
    ?>
</body>
</html>