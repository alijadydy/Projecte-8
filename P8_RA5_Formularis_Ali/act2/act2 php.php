<!--
Autor: Ali
Data: 22/05/2025
Exercici 2: Formulari amb mètode GET
-->
<?php
if (isset($_GET["nom"]) && isset($_GET["edat"])) {
    $nom = htmlspecialchars($_GET["nom"]);
    $edat = htmlspecialchars($_GET["edat"]);
    echo "<p>Nom: $nom</p>";
    echo "<p>Edat: $edat</p>";
}
?>
