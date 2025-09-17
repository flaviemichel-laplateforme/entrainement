<?php

//Multiples ciblés : affiche les multiples de 3 entre 3 et 30.

for ($i = 3; $i <= 30; $i++) {
    if ($i % 3 == 0) {
        echo $i . "<br />";
    }
}
