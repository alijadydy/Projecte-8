<!--
Autor: Ali
Data: 26/05/2025
Exercici: P8_RA5_7_Ali.php
Descripció: Mostra llibres ordenats per any descendent.
-->

<?php
$conn = new mysqli("localhost", "root", "", "biblioteca");

if ($conn->connect_error) {
    die("Connexió fallida: " . $conn->connect_error);
}

$sql = "SELECT * FROM llibres ORDER BY any DESC";
$result = $conn->query($sql);

echo "<h2>Llibres ordenats per any (descendent)</h2>";
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Títol</th><th>Autor</th><th>Any</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['id']}</td><td>{$row['titol']}</td><td>{$row['autor']}</td><td>{$row['any']}</td></tr>";
}

echo "</table>";

$conn->close();
?>
