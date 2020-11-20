<?php 
        // déclaration de la variable kilometer et initialisation avec sa valeur
        $kilometer = 1; 
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>
<body>
    <p>
        <?php 
        // affichage de la variable kilometer et de sa valeur initiale
        echo $kilometer;
        ?>
    </p>
    <p>
        <?php 
        // affichage de la variable kilometer et de sa valeur 2
        $kilometer = 3; 
        echo $kilometer;
        ?>
    </p>
    <p>
        <?php 
        // affichage de la variable kilometer et de sa valeur 3
        $kilometer = 125; 
        echo $kilometer;
        ?>
    </p>
</body>
</html>