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
        PHP number_format() Function
    */

    echo number_format("1000000")."<br>";
    echo number_format("1000000",2)."<br>";
    echo number_format("1000000",2,",",".");
    
    ?>
</body>

</html>