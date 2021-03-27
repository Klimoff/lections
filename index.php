<?php
    

    $array1 = [1,2,3,4,5];
    $array2 = [1,3,4,5,6];

    $array1[] = $array2;

    array_push($array1,$array2);
    echo '<pre>';
    var_dump($array1);
    echo '</pre>';
?>
