<!--
Autor: Ali
Data: 22/05/2025
Exercici 4: Validació d’un correu
-->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p>Email vàlid: $email</p>";
    } else {
        echo "<p style='color:red;'>El format del correu no és vàlid.</p>";
    }
}
?>
