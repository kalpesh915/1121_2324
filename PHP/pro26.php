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
          
        */
        
        $ip1 = 10;
        $ip2 = 20;

        function makeSum(){
            global $ip1, $ip2;
            $ans = $ip1 + $ip2;
            echo "<hr> Answer in function is $ans"; // $ans is local
        }

        makeSum();
        echo "<hr> Answer after function is $ans"; // error
    ?>
</body>
</html>