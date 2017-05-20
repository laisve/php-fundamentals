<?php
$students["first_name"] = "Laisve";
$students["last_name"] = "Lideikyte";
echo key_value($students);

function key_value($arr) {
    $num = count($arr);
        
    echo "The array you inserted has ".$num . " keys: ";
    foreach($arr as $key => $value) {
        $index = array_search($key, array_keys($arr));
        $index += 1;
        if($index < $num) {
        echo $key . " and ";
        }
        else {
            echo $key;
        }  
    }
    foreach($arr as $key => $value) {
        echo "<p>The value in the key "."'".$key."'". " is " ."'". $value . "'."."</p>";
    }
}
?>