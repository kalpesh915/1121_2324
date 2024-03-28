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
            <=> 	Spaceship 	$x <=> $y 	Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y.
        */ 

        echo "<hr>";
        var_dump(10 <=> 100); // 10 - 100 = -90 answer is (-1)

        echo "<hr>";
        var_dump(100 <=> 10); // 100 - 10 = 90 answer is (1)

        echo "<hr>";
        var_dump(100 <=> 100); // 100 - 100 = 0 answer is (0)
        
    ?>
</body>
</html>