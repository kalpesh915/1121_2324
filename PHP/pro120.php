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
        PHP wordwrap() Function
        Wrap a string into new lines when it reaches a specific length:
    */
    $str = "An example of a long word is: Supercalifragulistic";
    echo wordwrap($str,15,"<br>\n");
?>
</body>

</html>