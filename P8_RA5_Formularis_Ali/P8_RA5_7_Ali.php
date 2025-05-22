<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Gènere seleccionat: " . htmlspecialchars($_POST["genere"]);
}
?>
<form method="post">
    <label><input type="radio" name="genere" value="Home"> Home</label><br>
    <label><input type="radio" name="genere" value="Dona"> Dona</label><br>
    <label><input type="radio" name="genere" value="Altres"> Altres</label><br>
    <input type="submit" value="Enviar">
</form>