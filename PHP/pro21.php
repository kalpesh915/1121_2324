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
            Get the Type : To get the data type of a variable, use the var_dump() function.
        */ 

        $x = 10;
        echo "<hr>";
        var_dump($x);

        $x = "Rajkot";
        echo "<hr>";
        var_dump($x);

        $x = 'Rajkot';
        echo "<hr>";
        var_dump($x);

        $x = 12.34;
        echo "<hr>";
        var_dump($x);

        $x = true;
        echo "<hr>";
        var_dump($x);

        $x = ["Meet", "Brijesh", "Ansh"];
        echo "<hr>";
        var_dump($x);

        $x = null;
        echo "<hr>";
        var_dump($x);
    ?>
</body>
</html>