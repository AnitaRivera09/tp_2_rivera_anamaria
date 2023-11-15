<?php
include "../Result/fonctions.php";
if(isset($_POST['accepter']))
{
    ajouterAdresse($_POST);  
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/page_bienvenue.css"/>
    <title>Données d'adresses</title>
</head>
<body>
    <h1 class="titre">Données d'adresses</h1>
    <form class="form" method="post"></form> 
    </body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $noadresses = $_POST["noadresses"];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el número de direcciones ingresado
    $streets = $_POST["street"];
    $street_nos = $_POST["street_no"];
    $types=$_POST["type"];
    $citys=$_POST["city"];
    $zip_codes=$_POST["zip_code"];



    echo '<h2>Résumé des données saisies:</h2>';

    for ($i = 0; $i < $noadresses; $i++) {
        echo '<h1 class="titre">Adresse ' . ($i + 1) . ':</h1>';
        echo '<p><strong>Street:</strong> ' . htmlspecialchars($streets[$i]) . '</p>';
        echo '<p><strong>Street_no:</strong> ' . htmlspecialchars($street_nos[$i]) . '</p>';
        echo '<p><strong>Type:</strong> ' . htmlspecialchars($types[$i]) . '</p>';
        echo '<p><strong>City:</strong> ' . htmlspecialchars($citys[$i]) . '</p>';
        echo '<p><strong>Zip_code:</strong> ' . htmlspecialchars($zip_codes[$i]) . '</p>';
        echo '<br>';
    }?>
    <button type="submit" class="btn" name='accepter'>Confirmer les informations</button>
    <?php } else {
    echo '<p>Erreur Affichage des données</p>';
}
?>