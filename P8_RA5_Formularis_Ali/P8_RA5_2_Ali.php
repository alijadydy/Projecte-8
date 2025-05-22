<?php
if (isset($_GET["nom"]) && isset($_GET["edat"])) {
    echo "Nom: " . htmlspecialchars($_GET["nom"]) . "<br>";
    echo "Edat: " . htmlspecialchars($_GET["edat"]);
}
?>
<form method="get">
    Nom: <input type="text" name="nom"><br>
    Edat: <input type="number" name="edat"><br>
    <input type="submit" value="Enviar">
</form>