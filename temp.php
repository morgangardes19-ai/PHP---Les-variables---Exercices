<?php 
$age = 17;

$fruits = ["pomme", "fraise", "myrtille", "banane"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Resultat condition </h2>
    <?php if ($age >= 18) { ?>
        <p>Majeur</p>
     <?php } else { ?>
        <p>Mineur</p>
    <?php } ?>

    <hr>

    <h2>Résultat boucle liste des fruits</h2>
<ul>
    <!-- <li></li> -->
     <?php foreach ($fruits as $fruit) { ?>
        <li><?= $fruit ?></li>
     <?php } ?>
</ul>

</body>
</html>