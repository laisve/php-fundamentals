<?php
$grade = rand(40, 100);
if($grade < 65) {
    echo "<h1 style='color: red;'>Your Score: " . $grade . "/100</h1><h2 style='color: red;'>Your grade is D</h2>";
}
else if($grade <= 85) {
    echo "<h1 style='color: yellow;'>Your Score: " . $grade . "/100</h1><h2 style='color: yellow;'>Your grade is C</h2>";
}
else if($grade <= 95 ) {
    echo "<h1 style='color: #0bfe88;'>Your Score: " . $grade . "/100</h1><h2 style='color: #0bfe88;'>Your grade is B</h2>";
}
else if($grade > 95) {
    echo "<h1 style='color: #186942;'>Your Score: " . $grade . "/100</h1><h2 style='color: #186942;'>Your grade is A</h2>";
}
?>