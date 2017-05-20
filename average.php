<?php
$array = [3,6,2,13,7,8,10,21];
$avg = average_calculator($array);
echo $avg;

function average_calculator($arr) {
    $sum = 0;
    for($i = 0; $i < count($arr); $i++) {
        $sum += $arr[$i];
    }
    echo $sum / count($arr);
}

?>