<!--
Autor: Ali
Data: 22/05/2025
Exercici 9: Sanitització de dades
-->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comentari = htmlspecialchars($_POST["comentari"]);
    echo "<p>Comentari rebut:</p>";
    echo "<div style='border:1px solid #ccc; padding:10px;'>$comentari</div>";
}
?>
