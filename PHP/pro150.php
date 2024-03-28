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
            PHP Operators : Operators are used to perform operations on variables and values.
            PHP divides the operators in the following groups:
            Arithmetic operators, Assignment operators, Comparison operators, Increment/Decrement operators, Logical operators, String operators, Array operators, Conditional assignment operators
        */ 

        $ip1 = 100;
        $ip2 = 3;

        echo "<hr> Addition : ".($ip1 + $ip2);
        echo "<hr> Subtraction : ".($ip1 - $ip2);
        echo "<hr> Multiplication : ".($ip1 * $ip2);
        echo "<hr> Exponentiation : ".($ip1 ** $ip2); // ($ip1 ^ $ip2) / (100 ^ 3)
        echo "<hr> Division : ".($ip1 / $ip2);
        echo "<hr> Modulus : ".($ip1 % $ip2);
    ?>
</body>
</html>