<?php
    /*
        PHP - Looping Through the Values
        You can also loop through the values with a foreach() loop:
    */ 

    $JSONstudent = '{"id":1,"firstName":"Terry","lastName":"Medhurst","maidenName":"Smitham","age":50,"gender":"male","email":"atuny0@sohu.com","phone":"+63 791 675 8914","username":"atuny0","password":"9uQFF1Lh","birthDate":"2000-12-25","image":"https://robohash.org/Terry.png?set=set4","bloodGroup":"A-","height":189,"weight":75.4,"eyeColor":"Green","domain":"slashdot.org","ip":"117.29.86.254","macAddress":"13:69:BA:56:A3:74","university":"Capitol University","ein":"20-9487066","ssn":"661-64-2976","userAgent":"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/534.24 (KHTML, like Gecko) Chrome/12.0.702.0 Safari/534.24"}';

    // convert JSON String to PHP Assosiative Array
    $studentArray = json_decode($JSONstudent, true);

    echo "Welcome {$studentArray['firstName']} {$studentArray['lastName']}";
?>