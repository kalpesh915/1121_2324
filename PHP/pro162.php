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
           PHP Logical Operators : The PHP logical operators are used to combine conditional statements.

           and 	And 	$x and $y 	True if both $x and $y are true

           Truth Table

            Condition 1          Condition 2         Result
            True                 False               False
            False                True                False
            False                False               False
            True                 True                True
        */ 
        
        echo "<hr>";
        var_dump((10 > 8) and (10 > 100));

        echo "<hr>";
        var_dump((10 > 80) and (10 > 5));

        echo "<hr>";
        var_dump((10 > 80) and (10 > 100));

        echo "<hr>";
        var_dump((10 > 8) and (10 > 5));

        echo "<hr>";
        var_dump((10 > 8) && (10 > 5));
        
    ?>
</body>
</html>