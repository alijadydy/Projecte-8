<!--
Autor: Ali
Data: 26/05/2025
Exercici: P8_RA5_4_Ali.php
Descripció: Comprovació de camps buits abans d'inserir llibre a la base de dades.
-->

<?php
// Connexió amb la base de dades
$conn = new mysqli("localhost", "root", "", "biblioteca");

// Comprovació de la connexió
if ($conn->connect_error) {
    die("Connexió fallida: " . $conn->connect_error);
}

// Recollida i validació de dades
$titol = trim($_POST['titol']);
$autor = trim($_POST['autor']);
$any = trim($_POST['any']);

if ($titol === "" || $autor === "" || $any === "") {
    echo "Tots els camps són obligatoris. Torna enrere i omple'ls tots.";
} else {
    $sql = "INSERT INTO llibres (titol, autor, any) VALUES ('$titol', '$autor', '$any')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Llibre afegit correctament.";
    } else {
        echo "Error en afegir el llibre: " . $conn->error;
    }
}

$conn->close();
?>
