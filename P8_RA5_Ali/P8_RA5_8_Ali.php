<?php
// Exercici 8: Funció factorial
function factorial($num) {
    $resultat = 1;
    for ($i = 1; $i <= $num; $i++) {
        $resultat *= $i;
    }
    return $resultat;
}
echo "El factorial de 5 és: " . factorial(5);
?>