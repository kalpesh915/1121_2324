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
           PHP addcslashes() Function
        */

              //0123456789012345678901234567890123
        $ip1 = "welcome to world of Strings in PHP";
        
        echo addcslashes($ip1, "o");
    ?>
</body>
</html>