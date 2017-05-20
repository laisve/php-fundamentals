<?php
$arr = ["vienas", "du", "dvylika", "penkiolika"];
echo stalin($arr);

function stalin($arr) {
    for ($i = 0; $i < count($arr); $i++) {
        $length = strlen($arr[$i]);
        $newstr = str_repeat("*", $length)."<br>";
        echo $newstr;
    }
}
?>