<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Premier Cours de PHP</title>
</head>

<body>
<?php
$hello = "Hello World!";

$array = array("Hello", "World!");
$array1 = array(6 => "Hello", 26 => "World!");
$array2 = array("Hello", 1, $array[1]);
$array3 = ["Hello", "World!"];

?>
<h1><?= $hello ?></h1>
<h2><?= $array[0] . " " . $array[1] ?></h2>
<h3><?= $array1[26] . " " . $array1[6] ?></h3>
<h4><?= $array2[0] . " " . $array2[1] . " " . $array2[2] ?></h4>
<h5><?= $array3[0] . " " . $array3[1] ?></h5>

<?php
if (1 == "1"):
    echo "Vrais <br/>";
else :
    echo "Faux <br/>";
endif;

if (1 === "1"):
    echo "Vrais <br/>";
else :
    echo "Faux <br/>";
endif;

if (1 == 1):
    echo "Vrais <br/>";
else :
    echo "Faux <br/>";
endif;

if (1 != 2):
    echo "Vrais <br/>";
else :
    echo "Faux <br/>";
endif;

echo "2" + "3" . "<br/>";
echo 2 + 3 . "<br/>";

$age = 9;
if ($age < 3) : ?>
    <h2>Bébé</h2>
<?php elseif ($age < 12) : ?>
    <h2>Enfant</h2>
<?php elseif ($age < 16) : ?>
    <h2>Pré-Ado</h2>
<?php elseif ($age < 21) : ?>
    <h2>Ado</h2>
<?php elseif ($age >= 21) : ?>
    <h2>Adulte</h2>
<?php else : ?>
    <h2>Autre Chose</h2>
<?php endif; ?>

<?php

$jour = 3;

switch ($jour):
    case 1: ?>
        <h3>Lundi</h3>
        <?php break;
    case 2: ?>
        <h3>Mardi</h3>
        <?php break;
    case 3: ?>
        <h3>Mercredi</h3>
        <?php break;
    case 4: ?>
        <h3>Jeudi</h3>
        <?php break;
    case 5: ?>
        <h3>Vendredi</h3>
        <?php break;
    default: ?>
        <h3>Week-End</h3>
        <?php break;
endswitch;

for ($i = 1; $i <= 10; $i++) : ?>
    <?= "<p> $i x 3 = " . ($i * 3) . "<br/></p>";
endfor;

$arrayFruits = ["pomme", "poire", "fraise", "citron"];

foreach ($arrayFruits as $fruits) : ?>
    <?= "<p>$fruits <br/></p>";
endforeach;

foreach ($arrayFruits as $key => $fruits) : ?>
    <?= " <p> $fruits à l'indice $key <br/></p>";
endforeach;

?>

</body>

</html>