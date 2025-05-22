<!--
Autor: Ali
Data: 22/05/2025
Exercici 7: Formulari amb radio buttons
-->
<?php
if (isset($_POST["genere"])) {
    $genere = htmlspecialchars($_POST["genere"]);
    echo "<p>Gènere seleccionat: $genere</p>";
} else {
    echo "<p>No has seleccionat cap opció.</p>";
}
?>
