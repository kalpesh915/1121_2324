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
            Cast to Object : To cast to object, use the (object) statement:
        */
        $a = array("Volvo", "BMW", "Toyota"); // indexed array
        $b = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); // associative array
        
        $a = (object) $a;
        $b = (object) $b;
        
        
        $a = (object) $a;
        $b = (object) $b;

        echo "<hr>";
        var_dump($a);
        echo "<hr>";
        var_dump($b);
    ?>
</body>
</html>