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
        PHP strtok() Function
        Split string one by one:
        In the example below, note that it is only the first call to strtok() that uses the string argument. After the first call, this function only needs the split argument, as it keeps track of where it is in the current string. To tokenize a new string, call strtok() with the string argument again:
    */

    $string = "Hello world. Beautiful day today.";
    $token = strtok($string, " ");

    while ($token !== false) {
        echo "$token<br>";
        $token = strtok(" ");
    }
    ?>
</body>

</html>