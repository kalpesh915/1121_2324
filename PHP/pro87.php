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
        PHP parse_str() Function
    */

    parse_str("name=Peter&age=43&city=Rajkot", $ans);
    
    print_r($ans);
    
    ?>
</body>

</html>