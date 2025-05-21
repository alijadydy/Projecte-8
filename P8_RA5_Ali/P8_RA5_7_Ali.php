<?php
// Exercici 7: Funció per calcular l’IVA
function calcularIVA($preu, $percentatge) {
    return $preu + ($preu * $percentatge / 100);
}
echo "Preu amb IVA: " . calcularIVA(100, 21);
?>