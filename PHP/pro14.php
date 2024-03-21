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
            A variable can have a short name (like $x and $y) or a more descriptive name ($age, $carname, $total_volume).

            Rules for PHP variables:

            A variable starts with the $ sign, followed by the name of the variable
            A variable name must start with a letter or the underscore character
            A variable name cannot start with a number
            A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
            Variable names are case-sensitive ($age and $AGE are two different variables)

        */ 

        $x = 10;
        $y = 20;
        $z = 30;
        $a = $x + $y + $z;
        echo $a;
    ?>
</body>
</html>