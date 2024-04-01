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
            PHP switch Statement
            The switch statement is used to perform different actions based on different conditions. Use the switch statement to select one of many blocks of code to be executed.

            Syntax

            switch (expression) {
                case label1:
                    //code block
                    break;
                case label2:
                    //code block;
                    break;
                case label3:
                    //code block
                    break;
                default:
                //code block
            }
        */

        $ip1 = 4;

        switch($ip1){
            case 1:{
                echo "<hr> One";
                break;
            }
            case 2:{
                echo "<hr> Two";
                break;
            }
            case 3:{
                echo "<hr> Three";
                break;
            }
            case 4:{
                echo "<hr> Four";
                break;
            }
            case 5:{
                echo "<hr> Five";
                break;
            }
            default:{
                echo "<hr> Out of Range";
                break;
            }
        }

        /*
            This is how it works:
            The expression is evaluated once
            The value of the expression is compared with the values of each case
            If there is a match, the associated block of code is executed
            The break keyword breaks out of the switch block
            The default code block is executed if there is no match
        */ 
    ?>
</body>

</html>