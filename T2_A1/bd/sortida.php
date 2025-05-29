<?php
// Connexió
$conn = new mysqli("db", "root", "root", "control_acces");
if ($conn->connect_error) {
    die("Connexió fallida: " . $conn->connect_error);
}

// Obrir fitxer CSV
$fitxer = fopen("sortida.csv", "r");
if (!$fitxer) {
    die("No s'ha pogut obrir el fitxer sortida.csv");
}

// Ometre la primera línia (capçalera)
fgetcsv($fitxer, 1000, ";");

// Preparar consulta
$stmt = $conn->prepare("INSERT INTO sortida (temps, valor) VALUES (?, ?)");

while (($dades = fgetcsv($fitxer, 1000, ";")) !== FALSE) {
    $temps_original = trim($dades[0]);
    $valor = intval(trim($dades[1]));

    // Convertir el format de data
    $temps_convertit = date("Y-m-d H:i:s", strtotime(str_replace("/", "-", $temps_original)));

    // Si la data és vàlida, inserir
    if ($temps_convertit) {
        $stmt->bind_param("si", $temps_convertit, $valor);
        if (!$stmt->execute()) {
            echo "Error inserint: $temps_convertit, $valor<br>";
        }
    } else {
        echo "Data no vàlida: $temps_original<br>";
    }
}

fclose($fitxer);
$stmt->close();
$conn->close();

echo "Inserció finalitzada correctament.";
?>

