<?php
echo "Program has started.<br>";
$throw = 0;
$counttails = 0;
$countheads = 0;
for($i = 0; $i < 1000; $i++) {
    $coin = rand(1, 2);
    $throw += 1;
    if($coin == 1) {
        $counttails += 1;
        echo "Attempt " . $throw . ": Coin is in the air... It's a tail! So far " . $countheads . " head(s) and ".$counttails . " tail(s)<br>";
    }
    else if($coin == 2) {
        $countheads += 1;
        echo "Attempt " . $throw . ": Coin is in the air... It's a head! So far " . $countheads . " head(s) and ".$counttails . " tail(s)<br>";
    }
}
echo "Program has ended, nice!"
?>