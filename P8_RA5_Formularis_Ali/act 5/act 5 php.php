<!--
Autor: Ali
Data: 22/05/2025
Exercici 5: Checkbox amb múltiples opcions
-->
<?php
if (isset($_POST["aficions"])) {
    echo "<h3>Aficions seleccionades:</h3><ul>";
    foreach ($_POST["aficions"] as $aficio) {
        echo "<li>" . htmlspecialchars($aficio) . "</li>";
    }
    echo "</ul>";
} else {
    echo "<p>No has seleccionat cap afició.</p>";
}
?>
