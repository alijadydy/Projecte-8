<?php
// Connexió a la base de dades
$conn = new mysqli("db", "root", "root", "control_acces");

if ($conn->connect_error) {
    die("Connexió fallida: " . $conn->connect_error);
}

function mostrarTaula($conn, $nomTaula) {
    $sql = "SELECT * FROM $nomTaula";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Taula: $nomTaula</h2>";
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        echo "<tr><th>ID</th><th>Temps</th><th>Valor</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row["id"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["temps"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["valor"]) . "</td>";
            echo "</tr>";
        }
        echo "</table><br>";
    } else {
        echo "<p>No hi ha dades a la taula <strong>$nomTaula</strong></p>";
    }
}

// Mostrem les dues taules
mostrarTaula($conn, "entrada");
mostrarTaula($conn, "sortida");

$conn->close();
?>

