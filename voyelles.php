
<?php
/* TP 3 – Filtrer les voyelles
   Écris un script qui affiche uniquement les voyelles de :
   "Apprendre PHP demande de la pratique"
   Parcours chaque caractère avec une boucle.
   Vérifie si le caractère est une voyelle (aeiouyAEIOUY).
   Affiche uniquement les voyelles.
   Vérification : le texte affiché doit être composé uniquement de voyelles. */

$str = "Apprendre PHP demande de la pratique"; // Déclaration de la chaîne à analyser
for ($i = 0; $i < strlen($str); $i++) { // Boucle sur chaque caractère de la chaîne
    if (strpos("aeiouyAEIOUY", $str[$i]) !== false) { // Vérifie si le caractère est une voyelle
        echo $str[$i]; // Affiche la voyelle trouvée
    }
}

