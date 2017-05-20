<?php
$array = [3,6,2,13,7,8,10,21];
$result = multiply($array);
echo $result;

function multiply($arr) {
    $newArr = [];
    for($i = 0; $i < count($arr); $i++) {
        $new = $arr[$i] * 5;
        array_push($newArr, $new);
    }
    print_r($newArr);
}
?>