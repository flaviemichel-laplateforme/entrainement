<?php
// TP 6 Filtre de type de caractères

$str = "texte ponctué avec accents !";
$result = "";

// Parcours caractère par caractère
for ($i = 0; $i < mb_strlen($str, "UTF-8"); $i++) {
    $char = mb_substr($str, $i, 1, "UTF-8");
    
    // Vérifie si c’est une lettre (regex Unicode)
    if (preg_match("/\p{L}/u", $char)) {
        $result .= $char;
    }
}

echo $result;

