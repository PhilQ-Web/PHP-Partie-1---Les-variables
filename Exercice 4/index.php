<?php 
        // déclaration de la variable Name et initialisation avec sa valeur
        $Name = 'Philippe Quintas';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>
<body>
    <!-- Façon la plus propre -->
    <p>Bonjour <?php echo $Name;?>, comment vas-tu ?</p> 
    <!-- Façon la plus propre avec Raccourci pour "php echo" -->
    <p>Bonjour <?= $Name;?>, comment vas-tu ?</p>
    <p><?php echo "Bonjour ". $Name .", comment vas-tu ?";?></p>
</body>
</html>