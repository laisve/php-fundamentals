<?php
for($i = 1; $i < 1350; $i++) {
    if ($i % 2 == 0) {
        echo "</p>Number is " . $i . ". An even number.</p>";
    }
    else if ($i % 2 != 0) {
        echo "</p>Number is " . $i . ". An odd number.</p>";
    }
}
?>