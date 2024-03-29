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
            PHP String Operators
            PHP has two operators that are specially designed for strings.

            . 	Concatenation 	$txt1 . $txt2 	Concatenation of $txt1 and $txt2 	
            .= 	Concatenation assignment 	$txt1 .= $txt2 	Appends $txt2 to $txt1
        */ 

        $ip1 = "Ansh";
        $ip2 = "Amrutiya";
        
        $ip1 .= $ip2; // append $ip2 to $ip1

        echo $ip1;
    ?>
</body>
</html>