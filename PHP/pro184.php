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
        find maximum out of two numbers with use of nested if

        if( condition 1){
            code executed if condition 1 is true
            if(condtion 2){
                code executed if condition 2 is true
                if(condition 3){
                    code executed if condition 3 is true
                }
            }
        }

    */

    $ip1 = 1000;
    $ip2 = 200;
    $ip3 = 300;

    if ($ip1 > $ip2) {
        if($ip1 > $ip3){
            $ans = $ip1;
        }else{
            $ans = $ip3;
        }
    } else {
        if($ip2 > $ip3){
            $ans = $ip2;
        }else{
            $ans = $ip3;
        }
    }
    echo "Maximum is $ans";
    ?>
</body>

</html>