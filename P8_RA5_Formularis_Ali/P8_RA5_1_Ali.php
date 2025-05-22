<?php
// P8_RA5_1_Ali.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST["nom"]);
    echo "<h2>Benvingut, $nom!</h2>";
}
?>
<form method="post">
    Nom: <input type="text" name="nom">
    <input type="submit" value="Enviar">
</form>