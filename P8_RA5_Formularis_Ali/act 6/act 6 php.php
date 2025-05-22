<!--
Autor: Ali
Data: 22/05/2025
Exercici 6: Selecció amb menú desplegable
-->
<?php
if (isset($_POST["ciutat"])) {
    $ciutat = htmlspecialchars($_POST["ciutat"]);
    echo "<p>Ciutat seleccionada: $ciutat</p>";
}
?>
