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
            PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.
        */
        
        $ip1 = 10;
        $ip2 = 20;

        function makeSum(){
            global $ip1, $ip2;
            $GLOBALS["ans"] = $ip1 + $ip2;
            echo "<hr> Answer in function is ".$GLOBALS["ans"]; 
        }

        makeSum();
        echo "<hr> Answer after function is $ans"; // error
    ?>
</body>
</html>