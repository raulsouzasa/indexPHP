<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php

        if (isset($_GET['operacao'])) {
            if ($_GET['operacao'] == "soma") {
                if (isset($_GET['x']) and isset($_GET['y'])) {
                    $x = $_GET['x'];
                    $y = $_GET['y'];
                    echo $x," + ", $y, " = ", $x + $y;
                }
            } else if ($_GET['operacao'] == "subtracao") {
                if (isset($_GET['x']) and isset($_GET['y'])) {
                    $x = $_GET['x'];
                    $y = $_GET['y'];
                    echo $x," - ", $y, " = ", $x - $y;
                }
            } else if ($_GET['operacao'] == "multiplicacao") {
                if (isset($_GET['x']) and isset($_GET['y'])) {
                    $x = $_GET['x'];
                    $y = $_GET['y'];
                    echo $x," . ", $y, " = ", $x * $y;
                }
            } else if ($_GET['operacao'] == "divisao") {
                if (isset($_GET['x']) and isset($_GET['y'])) {
                    $x = $_GET['x'];
                    $y = $_GET['y'];
                    echo $x," / ", $y, " = ", $x / $y;
                }
            } 
        } else {
            echo "Pagina X";
        }
    ?>
</body>
</html>