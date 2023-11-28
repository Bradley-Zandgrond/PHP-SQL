<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kachel</title>
</head>
<body>

<?php
    // auteur: Bradley
    // functie: zet kachel aan

    // temp -1 - 0 graden: kachel hoge stand
    // temp 0-18: kachel normale stand
    // > 18: kachel uit

    
    //initialisatie van de temperatuur
    $temp = 15;

    if ($temp <= 0) {
        echo "kachel hoge stand";
    } elseif ($temp <= 18 && $temp >= 0) {
        echo "kachel normale stand";
    } else {
        echo "kachel uit";
    }
    

?>

</body>
</html>