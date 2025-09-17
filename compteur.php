<?php
//TP 4 – Compter les caractères



$str = "La répétition fait le maître";

// On enlève les espaces de la chaîne
$str_sans_espaces = str_replace(" ", "", $str);

// On compte les caractères (UTF-8 safe)
$compteur = mb_strlen($str_sans_espaces, "UTF-8");

echo "Le nombre de caractères est : " . $compteur;


