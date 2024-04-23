<?php
    /*
        require will produce a fatal error (E_COMPILE_ERROR) and stop the script
    */

    echo "<hr>Code Before File Require";

    //require("data1.php");
    require("data11.php");

    echo "<hr>Code After File Require";
 ?>