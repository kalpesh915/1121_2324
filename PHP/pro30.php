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
            PHP The static Keyword
            Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.
        */
        
        function counter(){
            $count = 1;
            echo "<hr> Value of Count is $count";
            $count++;
        }

        counter();
        counter();
        counter();
        counter();
        counter();
    ?>
</body>
</html>