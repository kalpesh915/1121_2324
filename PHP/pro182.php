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
        PHP - The if...elseif...else Statement
        The if...elseif...else statement executes different codes for more than two conditions.
        ladder if
    */

        $ip1 = 0;

        if($ip1 > 0){
            echo "Positive";
        }else if($ip1 < 0){
            echo "Negative";
        }else{
            echo "Value is Zero";
        }
    ?>
</body>

</html>