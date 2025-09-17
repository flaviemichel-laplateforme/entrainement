<?php

//TP 6 Comptage contrôlé
//Comptage contrôlé : affiche de 0 à 20 par pas de 5.

$int = 0; // Initialisation du compteur à 0
for ($i = 0; $i < 20; $i++) { // Boucle qui s'exécute 20 fois (de 0 à 19)
    $int++; // Incrémente le compteur de 1 à chaque itération
    if ($int % 5 == 0) { // Vérifie si le compteur est divisible par 5 (modulo = 0)
        echo $int . "<br />"; // Affiche la valeur du compteur suivie d'un saut de ligne HTML
    }
} // Résultat affiché : 5, 10, 15, 20