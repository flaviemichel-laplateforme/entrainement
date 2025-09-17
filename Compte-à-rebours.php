<?php

//TP 6 – Le compteur de caractères
//Compte à rebours

for ($i = 10; $i >= 0; $i--) {
    echo $i . "<br />";
    if ($i == 0) {
        echo "Départ !";
    }
}