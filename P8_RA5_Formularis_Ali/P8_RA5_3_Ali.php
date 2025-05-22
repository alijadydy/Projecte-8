<?php
$nom = $email = $missatge = "";
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nom"])) $errors[] = "El nom és obligatori.";
    else $nom = htmlspecialchars($_POST["nom"]);
    if (empty($_POST["email"])) $errors[] = "El correu és obligatori.";
    else $email = htmlspecialchars($_POST["email"]);
    if (empty($_POST["missatge"])) $errors[] = "El missatge és obligatori.";
    else $missatge = htmlspecialchars($_POST["missatge"]);

    if (empty($errors)) {
        echo "Nom: $nom<br>Email: $email<br>Missatge: $missatge";
    }
}
?>
<form method="post">
    Nom: <input type="text" name="nom"><br>
    Email: <input type="email" name="email"><br>
    Missatge: <textarea name="missatge"></textarea><br>
    <input type="submit" value="Enviar">
</form>
<?php foreach ($errors as $error) echo "<p style='color:red;'>$error</p>"; ?>