<!--
Autor: Ali
Data: 22/05/2025
Exercici 1: Formulari de nom
-->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST["nom"]);
    echo "<h2>Benvingut/da, $nom!</h2>";
}
?>
