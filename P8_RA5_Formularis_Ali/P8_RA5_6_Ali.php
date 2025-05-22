<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Ciutat seleccionada: " . htmlspecialchars($_POST["ciutat"]);
}
?>
<form method="post">
    Ciutat:
    <select name="ciutat">
        <option value="Barcelona">Barcelona</option>
        <option value="Girona">Girona</option>
        <option value="Tarragona">Tarragona</option>
    </select>
    <input type="submit" value="Enviar">
</form>