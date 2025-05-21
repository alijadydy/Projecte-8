<!DOCTYPE html>
<html>
<head><title>Exercici 10</title></head>
<body>
<?php
$usuaris = [
    ["nom" => "Ali", "correu" => "ali@example.com", "edat" => 21],
    ["nom" => "Mireia", "correu" => "mireia@example.com", "edat" => 17],
    ["nom" => "Joan", "correu" => "joan@example.com", "edat" => 19]
];

function esMajor($edat) {
    return $edat >= 18 ? "Sí" : "No";
}
?>
<table border="1">
    <tr><th>Nom</th><th>Correu</th><th>Edat</th><th>Major d'edat</th></tr>
    <?php foreach ($usuaris as $usuari): ?>
    <tr>
        <td><?= $usuari["nom"] ?></td>
        <td><?= $usuari["correu"] ?></td>
        <td><?= $usuari["edat"] ?></td>
        <td><?= esMajor($usuari["edat"]) ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>