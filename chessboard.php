<head>
    <title>Chessboard</title>
    <style type="text/css">
        table {
            border: 1px solid black;
        }
        td {
            width: 30px;
            height: 30px;
            border: 1px solid black;
        }
        
    </style>
</head>
<body>
    <table>
        <?php for($i = 1; $i < 10; $i++) {
            echo "<tr>";
            for($a = 1; $a < 10; $a++) {
                if($i % 2 == 0) {
                    if($a % 2 == 0) {
                        echo "<td></td>";
                    }
                    else {
                        echo "<td style='background-color: black;'></td>";
                    }
                }
                else {
                    if($a % 2 != 0) {
                        echo "<td></td>";
                    }
                    else {
                        echo "<td style='background-color: black;'></td>";
                    }
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>