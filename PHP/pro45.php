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
            Note There is a big difference between double quotes and single quotes in PHP.
            Double quotes process special characters, single quotes does not.

        */

        $username = "Meet Sinojiya";

        echo "<hr> Welcome $username";
        echo '<hr> Welcome $username';

        /*
            Double or Single Quotes?
            You can use double or single quotes, but you should be aware of the differences between the two. Double quoted strings perform action on special characters.
        */ 
    ?>
</body>
</html>