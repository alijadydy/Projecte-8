<?php
// Exercici 6: Llista d’alumnes amb edats
$alumnes = ["Ali" => 21, "Mireia" => 17, "Joan" => 18];
foreach ($alumnes as $nom => $edat) {
    if ($edat >= 18) {
        echo "$nom té $edat anys i és major d'edat.<br>";
    }
}
?>