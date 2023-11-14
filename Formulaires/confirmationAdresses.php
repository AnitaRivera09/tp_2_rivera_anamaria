<?php
include "../Result/fonctions.php";
if(isset($_POST['confirmer']))
{
    ajouterAdresse($_POST);  
}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css"/>
    <title>Données d'adresses</title>
</head>
<body>
    <h1>Données d'adresses</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $noadresses = isset($_POST['noadresses']) ? intval($_POST['noadresses']) : 0;
        $streets = $_POST["street"];
        $street_nos = $_POST["street_no"];
        $types=$_POST["type"];
        $citys=$_POST["city"];
        $zip_codes=$_POST["zip_code"];

        echo '<h2>Résumé des données saisies:</h2>';

        for ($i = 0; $i < $noadresses; $i++) {
            echo '<h3>Adresse ' . ($i + 1) . ':</h3>';
            echo '<p><strong>Street:</strong> ' . htmlspecialchars($streets[$i]) . '</p>';
            echo '<p><strong>Street_no:</strong> ' . htmlspecialchars($street_nos[$i]) . '</p>';
            echo '<p><strong>Type:</strong> ' . htmlspecialchars($types[$i]) . '</p>';
            echo '<p><strong>City:</strong> ' . htmlspecialchars($citys[$i]) . '</p>';
            echo '<p><strong>Zip_code:</strong> ' . htmlspecialchars($zip_codes[$i]) . '</p>';
            echo '<br>';
        }
    } else {
        echo '<p>Erreur Affichage des données</p>';
    }
    ?>
    <button type="submit" class="buttons" name='confirmer'>Confirmer les informations</button>
</body>
</html>