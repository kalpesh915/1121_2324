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
        find maximum out of two numbers with use of ladder if

        if (condition) {
            code to be executed if this condition is true;
        } elseif (condition) {
            // code to be executed if first condition is false and this condition is true;
        } else {
            // code to be executed if all conditions are false;
        }

    */

        $ip1 = 10;
        $ip2 = 200;
        $ip3 = 30;

        if($ip1 > $ip2 and $ip1 > $ip3){
            $ans = $ip1;
        }else if($ip2 > $ip1 and $ip2 > $ip3){
            $ans = $ip2;
        }else{
            $ans = $ip3;
        }

        echo "Maximum is $ans";
    ?>
</body>

</html>