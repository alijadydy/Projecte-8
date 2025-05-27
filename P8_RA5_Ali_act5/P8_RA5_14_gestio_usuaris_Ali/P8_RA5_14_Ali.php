<!--
Autor: Ali
Data: 26/05/2025
Exercici: P8_RA5_14_Ali.php
Descripció: Mostrar clients i afegir-ne de nous.
-->

<?php
$conn = new mysqli("localhost", "root", "", "usuaris");
if ($conn->connect_error) {
    die("Connexió fallida: " . $conn->connect_error);
}

// Si hi ha POST, inserim nou client
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = trim($_POST['nom'] ?? '');
    $email = trim($_POST['email'] ?? '');
    if ($nom && $email) {
        $stmt = $conn->prepare("INSERT INTO clients (nom, email) VALUES (?, ?)");
        $stmt->bind_param("ss", $nom, $email);
        $stmt->execute();
        $stmt->close();
    }
}

// Obtenir clients
$result = $conn->query("SELECT * FROM clients");
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Gestió de Clients</title>
</head>
<body>
    <h2>Llista de clients</h2>
    <?php if ($result->num_rows > 0): ?>
    <table border="1" cellpadding="5">
        <tr><th>ID</th><th>Nom</th><th>Email</th></tr>
        <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo htmlspecialchars($row['id']); ?></td>
                <td><?php echo htmlspecialchars($row['nom']); ?></td>
                <td><?php echo htmlspecialchars($row['email']); ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
    <?php else: ?>
        <p>No hi ha clients.</p>
    <?php endif; ?>

    <h3>Afegeix un client nou</h3>
    <form action="P8_RA5_14_Ali.php" method="post">
        <label>Nom: <input type="text" name="nom" required></label><br><br>
        <label>Email: <input type="email" name="email" required></label><br><br>
        <input type="submit" value="Afegir client">
    </form>
</body>
</html>

<?php
$conn->close();
?>
