<!DOCTYPE html>
<html>
<head><title>Exercici 10</title></head>
<body>
    <?php
    $nom = "Ali";
    $data = date("d/m/Y");
    ?>
    <div style="border:1px solid #000; padding:10px; width:300px;">
        <h2><?php echo $nom; ?></h2>
        <img src="https://via.placeholder.com/150" alt="Imatge de perfil" style="width:100%;">
        <p>Data d'avui: <?php echo $data; ?></p>
        <p>Benvingut/da a la meva targeta personal!</p>
    </div>
</body>
</html>