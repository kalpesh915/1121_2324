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
            PHP levenshtein() Function
            Calculate the Levenshtein distance between two strings:
        */

        // echo levenshtein("pooja", "puja");
        echo levenshtein("pooja", "poooja", 10, 20, 30);

        /*
            insert 	    Optional. The cost of inserting a character. Default is 1
            replace 	Optional. The cost of replacing a character. Default is 1
            delete 	    Optional. The cost of deleting a character. Default is 1
        */ 
    ?>
</body>
</html>