<?php
$nom = "Lucas";
$age = 18;
$ville = "Thennes";

function presentation($nom, $age, $ville){
echo "Bonjour, je m'appelle $nom, j'ai $age ans et j'habite à $ville. \n";
}
presentation($nom, $age, $ville);


$nombre1 = 1;
$nombre2 = 2;
function addition($nombre1, $nombre2){
$addition = $nombre1 + $nombre2;
echo "l'addition de $nombre1 et $nombre2 est égale à $addition";
}
addition($nombre1, $nombre2);

?>