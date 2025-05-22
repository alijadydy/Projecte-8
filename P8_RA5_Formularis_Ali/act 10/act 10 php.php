<!--
Autor: Ali
Data: 22/05/2025
Exercici 10: Mini projecte de formulari de contacte
-->
<?php
$errors = [];

$nom = trim($_POST["nom"] ?? "");
$email = trim($_POST["email"] ?? "");
$assumpte = trim($_POST["assumpte"] ?? "");
$missatge = trim($_POST["missatge"] ?? "");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($nom)) $errors[] = "Nom obligatori.";
    if (empty($email)) {
        $errors[] = "Email obligatori.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email no vàlid.";
    }
    if (empty($assumpte)) $errors[] = "Assumpte obligatori.";
    if (empty($missatge)) $errors[] = "Missatge obligatori.";

    if (empty($errors)) {
        echo "<p style='color:green;'>Formulari enviat correctament!</p>";
        echo "<p>Nom: $nom</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Assumpte: $assumpte</p>";
        echo "<p>Missatge: $missatge</p>";
    } else {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    }
}
?>
