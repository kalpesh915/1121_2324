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
            PHP Constants
            Constants are like variables, except that once they are defined they cannot be changed or undefined.
            A constant is an identifier (name) for a simple value. The value cannot be changed during the script. A valid constant name starts with a letter or underscore (no $ sign before the constant name).
            Note: Unlike variables, constants are automatically global across the entire script.

            Create a PHP Constant : To create a constant, use the define() function.    
            Syntax : define(name, value);

            name: Specifies the name of the constant, value: Specifies the value of the constant
        */ 

        define("city", "Rajkot");

        echo "Welcome to ".city;
    ?>
</body>
</html>