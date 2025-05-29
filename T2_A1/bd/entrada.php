<?php
// Connexió a la base de dades
$conn = new mysqli("db", "root", "root", "control_acces");
if ($conn->connect_error) {
    die("Connexió fallida: " . $conn->connect_error);
}

// Obrir el fitxer CSV
$fitxer = fopen("entrada.csv", "r");

// Ometre la primera línia (capçalera)
fgetcsv($fitxer, 1000, ";");

// Preparar consulta
$stmt = $conn->prepare("INSERT INTO entrada (temps, valor) VALUES (?, ?)");

// Llegir cada línia
while (($dades = fgetcsv($fitxer, 1000, ";")) !== FALSE) {
    // Convertir la data a format DATETIME (YYYY-MM-DD HH:MM:SS)
    $temps = date("Y-m-d H:i:s", strtotime($dades[0]));
    $valor = $dades[1];

    // Assignar paràmetres
    $stmt->bind_param("si", $temps, $valor);
    $stmt->execute();
}

fclose($fitxer);
$stmt->close();
$conn->close();

echo "Dades de entrada carregades correctament.";
?>
