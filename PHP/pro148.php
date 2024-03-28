<?php
    namespace demo;
?>
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

            if we create function inside of class its know as method
        */ 

        class Students{
            public function __construct(){
                echo "<hr>Class Name is : ".__CLASS__;
                echo "<hr>Method Name is : ".__METHOD__;
                echo "<hr>Name Space is : ".__NAMESPACE__;
                echo "<hr>Class Name is : ".Students::class;
            }
        }

        $obj1 = new Students();
        
    ?>
</body>
</html>