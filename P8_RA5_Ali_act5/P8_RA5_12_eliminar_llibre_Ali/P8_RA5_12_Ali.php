<!--
Autor: Ali
Data: 26/05/2025
Exercici: P8_RA5_12_Ali.php
Descripció: Esborra un llibre per ID.
-->

<?php
$conn = new mysqli("localhost", "root", "", "biblioteca");
if ($conn->connect_error) {
    die("Connexió fallida: " . $conn->connect_error);
}

$id = $_GET['id'] ?? null;
if ($id) {
    $stmt = $conn->prepare("DELETE FROM llibres WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}
$conn->close();

// Redirigir al llistat de llibres
header("Location: P8_RA5_2_Ali.php");
exit;
?>
