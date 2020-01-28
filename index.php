<!DOCTYPE html>
<html lang="cz">
<head>
    <title>Asdas</title>
</head>
<body>

<?php
define("max", 60);
$kolik = 0;
$kolik2 = 0;
do {
    $bedna = mt_rand(1, 5);
    $kolik2 = $kolik2 + $bedna;
    if ($kolik2 > max) {
        break;
    }
    $kolik = $kolik + $bedna;
    echo "Počet beden v nákladaku je $kolik <br>";
} while ($kolik <= 60);





?>
</body>
</html>               