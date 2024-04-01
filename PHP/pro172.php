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
            PHP Conditional Statements Very often when you write code, you want to perform different actions for different conditions. You can use conditional statements in your code to do this.

            In PHP we have the following conditional statements:

            if statement                -   executes some code if one condition is true
            if...else statement         -   executes some code if a condition is true and another
                                            code if that condition is false
            if...elseif...else statement -  executes different codes for more than two conditions
            switch statement            -   selects one of many blocks of code to be executed


            PHP - The if Statement The if statement executes some code if one condition is true.
            Syntax
            if (condition) {
                // code to be executed if condition is true;
            }
        */ 

        $ip1 = 10;

        echo "<hr> before condition";

        if($ip1 == 10){
            echo "<hr> value of \$ip1 is 10 ";
        }

        echo "<hr> after condition";
    ?>
</body>
</html>