<?php
//5. 🚀 TP PHP
//Vérification : tu dois avoir 14 lignes, et afficher aussi :

//Total d’itérations : 14

for ($i = 1; $i <= 14; $i++) {
    if ($i % 2 == 0) {
        echo "pair : " . $i . "<br />";
    }
    if ($i % 2 != 0) {
        echo "impair : " . $i . "<br />";
    }
}
echo "Total d’itérations : " . ($i - 1);
/* Après la fin de la boucle for, la variable $i vaut 15 (car la boucle s'arrête quand $i <= 14 devient faux, soit quand $i = 15)
L'expression ($i - 1) calcule donc 15 - 1 = 14
Cette ligne affiche donc "Total d'itérations : 14" 

Fin du TP */