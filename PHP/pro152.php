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
            PHP Comparison Operators :The PHP comparison operators are used to compare two values (number or string):

            == 	    Equal 	    $x == $y 	Returns true if $x is equal to $y
            === 	Identical 	$x === $y 	Returns true if $x is equal to $y, and they are of the 
                                            same type
        */ 

        echo "<hr>";
        var_dump(10 == 10);

        echo "<hr>";
        var_dump(10 == 100);

        echo "<hr>";
        var_dump(100 == 10);

        echo "<hr>";
        var_dump(10 == "10"); // value

        echo "<hr>";
        var_dump(10 === "10"); // value + type
    ?>
</body>
</html>