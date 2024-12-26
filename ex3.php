<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Structures de Contrôle et Fonctions</title>
</head>
<body>

<?php

$note = 14;


if ($note >= 16) {
    echo "$note - Excellent";
} elseif ($note >= 12 && $note <= 15) {
    echo "$note - Bon";
} elseif ($note >= 8 && $note <= 11) {
    echo ": $note - Peut mieux faire";
} else {
    echo "$note - Insuffisant";
}


function afficherNombres($max) {
    echo "Les nombres de 1 à $max :";
    for ($i = 1; $i <= $max; $i++) {
        echo "$i ";
    }
}


afficherNombres(10);
?>

</body>
</html>