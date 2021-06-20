<?php
    require_once("function/formater.php");
    $nomAffichage = formatage($sexe, $nom, $prenom);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Information de <?= $nomAffichage ?></h1>
    <?php foreach($hobbiesDuStagiaire as $hobbie): ?>
        <li><?= $hobbies[$hobbie] ?></li>
    <?php endforeach; ?>
</body>
</html>