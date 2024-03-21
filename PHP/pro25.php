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
          
          PHP The global Keyword
          The global keyword is used to access a global variable from within a function. To do this, use the global keyword before the variables (inside the function)
        */ 
        $username = "Sanjana Sonagra";
        function greetings(){
            global $username; // use global username variable in your function
            echo "<hr> Welcome <b>$username</b> to World of Dynamic web Development with PHP";
        }

        greetings();

        echo "<hr> Outside of Function \$username is <b>$username</b>";
    ?>
</body>
</html>