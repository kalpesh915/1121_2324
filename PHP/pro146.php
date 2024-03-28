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
            PHP const array
        */ 

        define("city", [
            "Rajkot",
            "Baroda",
            "Bhuj",
            "Ahamdabad",
            "Surat"
        ]);

        function greetings(){
            echo "Welcome to ".city[1];
        }

        greetings();
    ?>
</body>
</html>