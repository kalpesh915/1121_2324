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
            ! 	Not 	!$x 	True if $x is not true
        */ 
        
        echo "<hr>";
        var_dump((10 > 8) and (10 > 100));

        echo "<hr>";
        var_dump(!(10 > 8) and (10 > 100));

        echo "<hr>";
        var_dump(!((10 > 8) and (10 > 100)));
        
        echo "<hr>";
        var_dump(!(false));

        echo "<hr>";
        var_dump(!(true));
    ?>
</body>
</html>