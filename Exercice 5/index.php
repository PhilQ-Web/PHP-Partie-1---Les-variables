<?php 
        // déclaration de la variable answer et initialisation avec sa valeur
        $answer = 'Yes';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
</head>
<body>
    <?php 
        if($answer == 'Yes'){?>
            <p>Vous avez répondu "oui"</p>
            <?php }
        elseif ($answer == 'No'){?>
            <p>Vous avez répondu "non"</p>
            <?php }
        else{?>
             <p>Erreur</p>
            <?php }
    ?>
</body>
</html>