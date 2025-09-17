<?php

//Utilise une boucle for avec un pas de 2.
$str = "Coder tous les jours, un petit pas à la fois.";
for ($i = 0; $i < strlen($str); $i += 2) {
    echo $str[$i] . "\n";
}