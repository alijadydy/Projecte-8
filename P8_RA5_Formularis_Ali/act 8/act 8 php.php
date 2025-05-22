<!--
Autor: Ali
Data: 22/05/2025
Exercici 8: Reomplir valors si hi ha errors
-->
<?php
$nom = $_POST["nom"] ?? "";
$email = $_POST["email"] ?? "";
$telefon = $_POST["telefon"] ?? "";
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!$nom) $errors[] = "Nom obligatori.";
    if (!$email) $errors[] = "Email obligatori.";
    if (!$telefon) $errors[] = "Telèfon obligatori.";

    if (empty($errors)) {
        echo "<p>Formulari enviat correctament!</p>";
        echo "<p>Nom: $nom</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Telèfon: $telefon</p>";
    } else {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
        echo '<form action="P8_RA5_8_Ali.php" method="post">';
        echo '<input type="text" name="nom" value="' . htmlspecialchars($nom) . '" placeholder="Nom"><br>';
        echo '<input type="text" name="email" value="' . htmlspecialchars($email) . '" placeholder="Email"><br>';
        echo '<input type="text" name="telefon" value="' . htmlspecialchars($telefon) . '" placeholder="Telèfon"><br>';
        echo '<button type="submit">Enviar</button>';
        echo '</form>';
    }
}
?>
