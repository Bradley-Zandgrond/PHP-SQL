<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>

<?php
// Auteur: Bradley
// functie: Schrijf text met variabele

echo "<h1>Hello World,</h1>";
echo "Ik zit op het";

$schoolnaam = "Techniek College Rotterdam !";
$totaal = 1000;

echo "$schoolnaam";
echo "<br>";
echo "€" . "$totaal" . " Euro";

/*-------------------Opdracht 3.6-------------------*/

// Opdracht: a

date_default_timezone_set("Europe/Amsterdam");

$today = date("j F Y");
echo "Vandaag is het: $today. <br>";

// Opdracht: b

$dayofyear = date("z");
echo "Vandaag is het de $dayofyear dag van het jaar. <br>";

// Opdracht: c

$dayofweek = date("w");
$day = date("l");
echo "$day is de $dayofweek dag van de week. <br>";

// Opdracht: d

$monht = date("F");
$totaldays = date("t");
echo "De maand $month heeft in totaal $totaldays dagen. <br>";

// Opdracht: e

$checkfeb = date("L");
echo "Het Jaar Y is er $checkfeb schrikkeljaar. <br>";


?>
</body>
</html>
