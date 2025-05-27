<!--
Autor: Ali
Data: 26/05/2025
Exercici: P8_RA5_13_Ali.html (HTML amb PHP integrat)
Descripció: Llistat de llibres amb confirmació per eliminar.
-->

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Llistat llibres amb confirmació d'eliminació</title>
    <script>
    function confirmarEliminar(id) {
        if(confirm('Segur que vols eliminar aquest llibre?')) {
            window.location.href = 'P8_RA5_12_Ali.php?id=' + id;
        }
    }
    </script>
</head>
<body>
    <h2>Llistat de llibres</h2>
    <?php
    $conn = new mysqli("localhost", "root", "", "biblioteca");
    if ($conn->connect_error) {
        die("Connexió fallida: " . $conn->connect_error);
    }
    $result = $conn->query("SELECT * FROM llibres");
    if ($result->num_rows > 0) {
        echo "<table border='1' cellpadding='5'>";
        echo "<tr><th>ID</th><th>Títol</th><th>Autor</th><th>Any</th><th>Eliminar</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['id']) . "</td>";
            echo "<td>" . htmlspecialchars($row['titol']) . "</td>";
            echo "<td>" . htmlspecialchars($row['autor']) . "</td>";
            echo "<td>" . htmlspecialchars($row['any']) . "</td>";
            echo "<td><button onclick='confirmarEliminar(" . $row['id'] . ")'>Eliminar</button></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No hi ha llibres a la base de dades.</p>";
    }
    $conn->close();
    ?>
</body>
</html>
