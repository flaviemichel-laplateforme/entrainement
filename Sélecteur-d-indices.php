<?php
//Sélecteur d’indices : affiche les indices pairs d’une chaîne donnée de 0 à 20.

for ($i = 0; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        echo $i . "<br />";
    }
}
