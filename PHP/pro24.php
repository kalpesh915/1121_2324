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
          A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:
        */ 
        $username = "Sanjana Sonagra";
        function greetings(){
             // using username inside this function will generate an error
            echo "<hr> Welcome <b>$username</b> to World of Dynamic web Development with PHP";
        }

        greetings();

        echo "<hr> Outside of Function \$username is $username";
    ?>
</body>
</html>