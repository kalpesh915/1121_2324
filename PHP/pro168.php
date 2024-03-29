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
            PHP Conditional Assignment Operators
            The PHP conditional assignment operators are used to set a value depending on conditions:

            answer = (condition ? true part : false part);

            ?: 	Ternary 	$x = expr1 ? expr2 : expr3 	Returns the value of $x.
            The value of $x is expr2 if expr1 = TRUE, The value of $x is expr3 if expr1 = FALSE

            find maximum out of two values with use of ternary operator
        */ 

        $ip1 = 100;
        $ip2 = 15;

                // 100 > 15 ? 100 : 15
        $ans = ($ip1 > $ip2 ? $ip1 : $ip2);
        
        echo "Maximum is $ans";

    ?>
</body>
</html>