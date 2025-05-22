<?php
$errors = [];
$nom = $email = $assumpte = $missatge = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nom"])) $errors[] = "Nom obligatori";
    else $nom = htmlspecialchars($_POST["nom"]);
    if (empty($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) $errors[] = "Email no vàlid";
    else $email = htmlspecialchars($_POST["email"]);
    if (empty($_POST["assumpte"])) $errors[] = "Assumpte obligatori";
    else $assumpte = htmlspecialchars($_POST["assumpte"]);
    if (empty($_POST["missatge"])) $errors[] = "Missatge obligatori";
    else $missatge = htmlspecialchars($_POST["missatge"]);

    if (empty($errors)) {
        echo "<p style='color:green;'>Formulari enviat correctament!</p>";
        echo "<p><strong>Nom:</strong> $nom<br><strong>Email:</strong> $email<br><strong>Assumpte:</strong> $assumpte<br><strong>Missatge:</strong> $missatge</p>";
    }
}
?>
<form method="post">
    Nom: <input type="text" name="nom" value="<?php echo $nom; ?>"><br>
    Email: <input type="text" name="email" value="<?php echo $email; ?>"><br>
    Assumpte: <input type="text" name="assumpte" value="<?php echo $assumpte; ?>"><br>
    Missatge: <textarea name="missatge"><?php echo $missatge; ?></textarea><br>
    <input type="submit" value="Enviar">
</form>
<?php foreach ($errors as $error) echo "<p style='color:red;'>$error</p>"; ?>