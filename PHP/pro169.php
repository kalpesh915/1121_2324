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
            find maximum out of three values with use of ternary operator
        */ 

        $ip1 = 200;
        $ip2 = 250;
        $ip3 = 150;

        $ans = ($ip1 > $ip2 ? ($ip1 > $ip3 ? $ip1 : $ip3) : ($ip2 > $ip3 ? $ip2 : $ip3));
        
        echo "Maximum is $ans";

    ?>
</body>
</html>