<?php
require_once("function/formater.php");
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
    <ul>
        <?php foreach($stagiaires as $key => $stagiaire): ?>
            <li><?= formatage($stagiaire["sexe"], $stagiaire["nom"], $stagiaire["prenom"]) ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>