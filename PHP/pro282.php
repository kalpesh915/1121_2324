<?php
    /*
        PHP Delete Array Items
        Remove Array Item : To remove an existing item from an array, you can use the array_splice() function. With the array_splice() function you specify the index (where to start) and how many items you want to delete.

        array_splice(array_name, start_index, number of elements)
    */ 

    $students = ["pooja", "sanjana", "alan", "krishil", "meet", "ansh", "brijesh"];

    echo "<hr>Original Array is :<hr>";
    print_r($students);

    //array_splice($students, 1, 3);
    array_splice($students, 1, 1);
    // After the deletion, the array gets reindexed automtically, starting at index 0.

    echo "<hr>Updated Array is :<hr>";
    print_r($students);    
?>