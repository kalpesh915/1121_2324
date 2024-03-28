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
            PHP Magic Constants
        */ 

        // declare trait for functions
        trait messages{
            public function greetings(){
                echo "<hr> Triat Name is ".__TRAIT__;
            }
        }
        
        // include trait in class
        class caller{
            use messages;
        }

        // create object of class
        $obj1 = new caller();

        // call the method
        $obj1->greetings();
    ?>
</body>
</html>