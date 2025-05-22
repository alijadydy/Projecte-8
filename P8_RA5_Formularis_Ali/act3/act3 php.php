<!--
Autor: Ali
Data: 22/05/2025
Exercici 3: Formulari amb validació bàsica
-->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = trim($_POST["nom"]);
    $email = trim($_POST["email"]);
    $missatge = trim($_POST["missatge"]);

    if ($nom && $email && $missatge) {
        echo "<p>Nom: $nom</p>";
        echo "<p>Correu: $email</p>";
        echo "<p>Missatge: $missatge</p>";
    } else {
        echo "<p style='color:red;'>Tots els camps són obligatoris.</p>";
    }
}
?>
