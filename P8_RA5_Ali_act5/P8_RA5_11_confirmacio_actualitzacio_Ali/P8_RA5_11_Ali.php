<!--
Autor: Ali
Data: 26/05/2025
Exercici: P8_RA5_11_Ali.php
Descripció: Missatge de confirmació després d’actualitzar un llibre.
-->

<?php
$id = $_GET['id'] ?? null;
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Confirmació d'actualització</title>
</head>
<body>
    <h2>Actualització correcta</h2>
    <?php if ($id): ?>
        <p>El llibre amb ID <strong><?php echo htmlspecialchars($id); ?></strong> s'ha actualitzat correctament.</p>
    <?php else: ?>
        <p>Actualització realitzada.</p>
    <?php endif; ?>
    <p><a href="P8_RA5_9_Ali.html">Torna al llistat de llibres</a></p>
</body>
</html>
