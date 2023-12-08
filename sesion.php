<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    
    // auteur: Bradley
    // functie: uitleg session

    $telop = 0;

    session_start();
    // test first time session
    if (isset($_SESSION['som']) == false){
        $_SESSION['som'] = 0
    } else {
        $_SESSION['som']++;
    }
    
    echo "Telop: " . $_SESSION['som']. "<br>"
    
    
?>
</body>
</html>