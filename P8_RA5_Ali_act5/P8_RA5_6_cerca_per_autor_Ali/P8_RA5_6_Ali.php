<!--
Autor: Ali
Data: 26/05/2025
Exercici: P8_RA5_6_Ali.php
Descripció: Mostra llibres segons l’autor cercat.
-->

<?php
$conn = new mysqli("localhost", "root", "", "biblioteca");

if ($conn->connect_error) {
    die("Connexió fallida: " . $conn->connect_error);
}

$autor = $_GET['autor'];

$sql = "SELECT * FROM llibres WHERE autor LIKE ?";
$stmt = $conn->prepare($sql);
$likeAutor = "%" . $autor . "%";
$stmt->bind_param("s", $likeAutor);
$stmt->execute();

$result = $stmt->get_result();

echo "<h2>Resultats de la cerca per autor: $autor</h2>";
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Títol</th><th>Autor</th><th>Any</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['id']}</td><td>{$row['titol']}</td><td>{$row['autor']}</td><td>{$row['any']}</td></tr>";
}

echo "</tabl
