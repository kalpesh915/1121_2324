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
            PHP implode() Function
        */

        $arr = array('Hello','World!','Beautiful','Day!', 'very nice sunrise');
        //echo implode(" ",$arr);
        echo join(" ",$arr);
    ?>
</body>
</html>