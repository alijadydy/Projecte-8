<!--
Autor: Ali
Data: 26/05/2025
Exercici: P8_RA5_3_Ali.php
Descripció: Processa el formulari i afegeix un llibre a la base de dades.
-->

<?php
// Connexió amb la base de dades
$conn = new mysqli("localhost", "root", "", "biblioteca");

// Comprovació de la connexió
if ($conn->connect_error) {
    die("Connexió fallida: " . $conn->connect_error);
}

// Recollida de dades del formulari
$titol = $_POST['titol'];
$autor = $_POST['autor'];
$any = $_POST['any'];

// Inserció a la base de dades
$sql = "INSERT INTO llibres (titol, autor, any) VALUES ('$titol', '$autor', '$any')";

if ($conn->query($sql) === TRUE) {
    echo "Llibre afegit correctament.";
} else {
    echo "Error en afegir el llibre: " . $conn->error;
}

$conn->close();
?>
