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
           chop : Removes whitespace or other characters from the right end of a string
        */

              //0123456789012345678901234567890123
        //$ip1 = "welcome to 'world' of 'Strings' in PHP";
        
        $str = "Hello World hi!";
        echo $str . "<br>";
        echo chop($str,"hi!");
    ?>
</body>
</html>