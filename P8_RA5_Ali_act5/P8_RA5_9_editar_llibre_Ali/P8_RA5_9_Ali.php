<!--
Autor: Ali
Data: 26/05/2025
Exercici: P8_RA5_9_Ali.php
Descripció: Formulari per editar un llibre seleccionat.
-->

<?php
$conn = new mysqli("localhost", "root", "", "biblioteca");

if ($conn->connect_error) {
    die("Connexió fallida: " . $conn->connect_error);
}

$id = $_GET['id'];
$sql = "SELECT * FROM llibres WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$llibre = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Editar llibre</title>
</head>
<body>
    <h2>Editar llibre</h2>
    <form action="P8_RA5_10_Ali.php" method="post">
        <input type="hidden" name="id" value="<?php echo $llibre['id']; ?>">
        <label for="titol">Títol:</label>
        <input type="text" name="titol" id="titol" value="<?php echo $llibre['titol']; ?>" required><br>
        <label for="autor">Autor:</label>
        <input type="text" name="autor" id="autor" value="<?php echo $llibre['autor']; ?>" required><br>
        <label for="any">Any:</label>
        <input type="number" name="any" id="any" value="<?php echo $llibre['any']; ?>" required><br>
        <input type="submit" value="Desar canvis">
    </form>
</body>
</html>

<?php
$stmt->close();
$conn->close();
?>
