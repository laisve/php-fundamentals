<!DOCTYPE html>
<html>
<head>
    <title>Multiplication table</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <table>
        <?php
            echo "<tr style='font-weight: bold;'>";
            echo "<td></td>";
            for ($i = 1; $i < 10; $i++) {
                
                echo "<td>" . $i . "</td>";
            }
            echo "</tr>";
            for ($i = 1; $i < 10; $i++) {
                echo "<tr>";
                echo "<td style='font-weight: bold;'>".$i."</td>";
                for ($m = 1; $m < 10; $m++) {
                    echo "<td>" . $m * $i . "</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>