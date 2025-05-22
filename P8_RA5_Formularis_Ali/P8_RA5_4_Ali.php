<?php
$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        echo "Correu vàlid: " . htmlspecialchars($_POST["email"]);
    } else {
        $error = "El correu no és vàlid.";
    }
}
?>
<form method="post">
    Email: <input type="text" name="email">
    <input type="submit" value="Validar">
</form>
<p style="color:red;"><?php echo $error; ?></p>