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
            Cast Object to Array
        */

        class Student{
            public $roll, $fname, $lname;

            public function __construct($roll, $fname, $lname){
                $this->roll = $roll;
                $this->fname = $fname;
                $this->lname = $lname;
            }
        }

        $obj = new Student(111, "Krishil", "Trivedi");

        echo "<hr>";
        $array1 = (array) $obj; // convert object to array
        var_dump($array1);
    ?>
</body>
</html>