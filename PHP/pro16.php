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
            Output Variables
            The PHP echo statement is often used to output data to the screen.
            The following example will show how to output text and a variable:
        */ 

        $username = "Alan Thomas";

        echo "<hr> Welcome $username";
        echo "<hr> Welcome ".$username;
    ?>
</body>
</html>