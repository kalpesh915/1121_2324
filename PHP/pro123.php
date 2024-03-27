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
            Here are some rules for integers:
            An integer must have at least one digit
            An integer must NOT have a decimal point
            An integer can be either positive or negative
            Integers can be specified in three formats: decimal (base 10), hexadecimal (base 16 - prefixed with 0x), octal (base 8 - prefixed with 0) or binary (base 2 - prefixed with 0b)
        */
        
        $ip1 = 10; // decimal
        echo "<hr>";
        var_dump($ip1);

        $ip1 = 010; // octal
        echo "<hr>";
        var_dump($ip1);

        $ip1 = 0x10; // hex decimal
        echo "<hr>";
        var_dump($ip1);

        $ip1 = 0b101; // binarys
        echo "<hr>";
        var_dump($ip1);
    ?>
</body>
</html>