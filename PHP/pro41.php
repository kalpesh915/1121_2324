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
            PHP Object
            Classes and objects are the two main aspects of object-oriented programming. A class is a template for objects, and an object is an instance of a class. When the individual objects are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.    
        */

        class Student{
            public $roll, $fname, $lname;
            public function __construct($rn, $fn, $ln){
                $this->roll = $rn;
                $this->fname = $fn;
                $this->lname = $ln;
            }
        }
        
        $obj1 = new Student(111, "Brijesh", "Miatra");
        var_dump($obj1);
    ?>
</body>
</html>