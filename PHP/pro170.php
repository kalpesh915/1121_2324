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
            ?? 	Null coalescing 	$x = expr1 ?? expr2 	
            Returns the value of $x. The value of $x is expr1 if expr1 exists, and is not NULL.
            If expr1 does not exist, or is NULL, the value of $x is expr2.
        */ 

        $ip1 = 10;
        //$ip2 = 20;
        $ans = $ip1 + ($ip2 ?? 0); // value of $ip2 is 0 if no value found for $ip2

        echo "Answer is $ans";
    ?>
</body>
</html>