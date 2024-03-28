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
            PHP const Keyword : You can also create a constant by using the const keyword.
        */ 

        const city = "Rajkot";
        echo "Welcome to ".city;

        /*
            const vs. define()
            const and define() both are always case-sensitive
            const cannot be created inside another block scope, like inside a function or inside an if statement.
            define can be created inside another block scope.
        */ 
    ?>
</body>
</html>