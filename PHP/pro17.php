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
            Output Variables
            The PHP echo statement is often used to output data to the screen.
            The following example will show how to output text and a variable:
        */ 

        $ip1 = 10;
        $ip2 = 20;

        echo "<hr> Sum is $ip1 + $ip2";
        echo "<hr> Sum is ".($ip1 + $ip2);
    ?>
</body>
</html>