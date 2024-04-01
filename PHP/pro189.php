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
        The break Keyword When PHP reaches a break keyword, it breaks out of the switch block. This will stop the execution of more code, and no more cases are tested.
        */

        $ip1 = 4;

        switch($ip1){
            case 1:{
                echo "<hr> Sunday";
                //break;
            }
            case 2:{
                echo "<hr> Monday";
                //break;
            }
            case 3:{
                echo "<hr> Tuesday";
                //break;
            }
            case 4:{
                echo "<hr> Wednesday";
                //break;
            }
            case 5:{
                echo "<hr> Thursday";
                //break;
            }
            case 6:{
                echo "<hr> Friday";
                //break;
            }
            case 7:{
                echo "<hr> Saturday";
                //break;
            }
            default:{
                echo "<hr> Out of Range";
                //break;
            }
        }

        /*
            The default Keyword : The default keyword specifies the code to run if there is no case match:
        */
    ?>
</body>

</html>