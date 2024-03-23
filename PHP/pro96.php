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
        PHP str_pad() Function
        Pad to the right side of the string, to a new length of 20 characters: 
    */

        $str = "Hello World";
        echo str_pad($str,20,"*");
        
    ?>
</body>

</html>