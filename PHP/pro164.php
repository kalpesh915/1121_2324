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
            xor 	Xor 	$x xor $y 	True if either $x or $y is true, but not both

           Truth Table

            Condition 1          Condition 2         Result
            True                 False               True
            False                True                True
            False                False               False
            True                 True                False
        */ 
        
        echo "<hr>";
        var_dump((10 > 8) xor (10 > 100));

        echo "<hr>";
        var_dump((10 > 80) xor (10 > 5));

        echo "<hr>";
        var_dump((10 > 80) xor (10 > 100));

        echo "<hr>";
        var_dump((10 > 8) xor (10 > 5));
        
    ?>
</body>
</html>