<!--
Autor: Ali
Data: 26/05/2025
Exercici: P8_RA5_10_Ali.php
Descripció: Valida dades i actualitza el llibre.
-->

<?php
$conn = new mysqli("localhost", "root", "", "biblioteca");
if ($conn->connect_error) {
    die("Connexió fallida: " . $conn->connect_error);
}

// Recollim dades POST
$id = $_POST['id'] ?? null;
$titol = trim($_POST['titol'] ?? '');
$autor = trim($_POST['autor'] ?? '');
$any = trim($_POST['any'] ?? '');

if (!$id || empty($titol) || empty($autor) || empty($any)) {
    // Si falta algun camp, mostrar error i tornar al formulari
    echo "<p style='color:red;'>Error: Tots els camps són obligatoris.</p>";
    echo "<p><a href='P8_RA5_9_Ali.php?id=$id'>Torna enrere per corregir</a></p>";
    exit;
}

// Actualitzar dades amb sentència preparada
$sql = "UPDATE llibres SET titol = ?, autor = ?, any = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssii", $titol, $autor, $any, $id);

if ($stmt->execute()) {
    // Redirigir a la pàgina de confirmació (activitat 11)
    header("Location: P8_RA5_11_Ali.php?id=$id");
    exit;
} else {
    echo "Error actualitzant registre: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
