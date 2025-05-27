<!--
Autor: Ali
Data: 26/05/2025
Exercici: P8_RA5_8_Ali.php
Descripció: Mostra llibres que contenen una paraula al títol.
-->

<?php
$conn = new mysqli("localhost", "root", "", "biblioteca");

if ($conn->connect_error) {
    die("Connexió fallida: " . $conn->connect_error);
}

$titol = $_GET['titol'];
$sql = "SELECT * FROM llibres WHERE titol LIKE ?";
$stmt = $conn->prepare($sql);
$likeTitol = "%" . $titol . "%";
$stmt->bind_param("s", $likeTitol);
$stmt->execute();
$result = $stmt->get_result();

echo "<h2>Resultats de la cerca per títol: $titol</h2>";
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Títol</th><th>Autor</th><th>Any</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['id']}</td><td>{$row['titol']}</td><td>{$row['autor']}</td><td>{$row['any']}</td></tr>";
}

echo "</table>";

$stmt->close();
$conn->close();
?>
