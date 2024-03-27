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

        $a = 5;       // Integer
        $b = 5.34;    // Float
        $c = "hello"; // String
        $d = true;    // Boolean
        $e = NULL;    // NULL
        $f = array("Rajkot", "Baroda");
        
        $a = (object) $a;
        $b = (object) $b;
        $c = (object) $c;
        $d = (object) $d;
        $e = (object) $e;
        $f = (object) $f;

        echo "<hr>";
        var_dump($a);
        echo "<hr>";
        var_dump($b);
        echo "<hr>";
        var_dump($c);
        echo "<hr>";
        var_dump($d);
        echo "<hr>";
        var_dump($e);
        echo "<hr>";
        var_dump($f);
    ?>
</body>
</html>