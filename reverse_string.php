<?php
$str = "Hello world";
echo reverse_string($str);
function reverse_string($str) {
    $ret = "";
    $arr = explode(' ', $str);
    var_dump($arr);
    
    foreach($arr as $value) {
        for($i = strlen($value) - 1; $i >= 0; $i--) {
            $ret .= $value[$i];
        }
        $ret .= " ";
    }
    return $ret;
}
?>