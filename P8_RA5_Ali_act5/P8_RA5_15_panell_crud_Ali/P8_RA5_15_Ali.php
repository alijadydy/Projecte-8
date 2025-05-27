<!--
Autor: Ali
Data: 26/05/2025
Exercici: P8_RA5_15_Ali.php
Descripció: Panell CRUD complet per llibres amb pestanyes simples.
-->

<?php
// Connexió a la base de dades
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "biblioteca";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connexió fallida: " . $conn->connect_error);
}

// Si s'envia el formulari, inserir llibre
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titol = $_POST['titol'];
    $autor = $_POST['autor'];
    $any = intval($_POST['any']);

    $sql = "INSERT INTO llibres (titol, autor, any) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $titol, $autor, $any);
    $stmt->execute();
    $stmt->close();

    echo "<p>Llibre afegit correctament!</p>";
}

// Mostrar llista de llibres
$result = $conn->query("SELECT * FROM llibres ORDER BY any DESC");

echo "<h1>Llista de llibres</h1>";
echo "<table border='1' cellpadding='8'>";
echo "<tr><th>ID</th><th>Títol</th><th>Autor</th><th>Any</th></tr>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . htmlspecialchars($row['titol']) . "</td>";
        echo "<td>" . htmlspecialchars($row['autor']) . "</td>";
        echo "<td>" . $row['any'] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>No hi ha llibres.</td></tr>";
}
echo "</table>";

echo '<p><a href="P8_RA5_15_Ali.html">Afegir un nou llibre</a></p>';

$conn->close();
?>
