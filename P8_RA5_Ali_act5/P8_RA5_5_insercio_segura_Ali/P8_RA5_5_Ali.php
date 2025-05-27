<!--
Autor: Ali
Data: 26/05/2025
Exercici: P8_RA5_5_Ali.php
Descripció: Inserció segura d’un llibre amb mysqli_prepare.
-->

<?php
$conn = new mysqli("localhost", "root", "", "biblioteca");

if ($conn->connect_error) {
    die("Connexió fallida: " . $conn->connect_error);
}

$titol = trim($_POST['titol']);
$autor = trim($_POST['autor']);
$any = trim($_POST['any']);

if ($titol === "" || $autor === "" || $any === "") {
    echo "Tots els camps són obligatoris.";
} else {
    $stmt = $conn->prepare("INSERT INTO llibres (titol, autor, any) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $titol, $autor, $any);

    if ($stmt->execute()) {
        echo "Llibre afegit amb èxit.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
