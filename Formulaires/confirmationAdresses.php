//<?php
//include "../Result/fonctions.php";
//if(isset($_POST['accepter']))
//{
 //   ajouterAdresse($streets, $street_nos, $types, $citys, $zip_codes);  
//}
//?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/page_bienvenue.css"/>
</head>
<body>
    <h1 class="titre">Données d'adresses</h1>
    <form class="form" method="post" action="../Formulaires/affichageAdresses.php">
    
    <?php

    $server = 'localhost';
    $username ="root";
    $pwd = "";
    $db = "ecom1_tp2";
    $conn = mysqli_connect($server,$username,$pwd,$db);
    
    if ($conn){
        echo "<label>Connected to the $db database successfully</label>";
    }else{
        echo "<label>Error: Not connected to the $db database</label>";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $noadresses = $_POST["noadresses"];
        ?>

        <h2>Résumé des données saisies:</h2>
        <ul>
            <?php
            for ($i = 1; $i <= $noadresses; $i++) {
                $street = $_POST["street_" . $i];
                $streetno = $_POST["streetno_" . $i];
                $type = $_POST["type_" . $i];
                $city = $_POST["city_" . $i];
                $zipcode = $_POST["zipcode_" . $i];

                echo '<h1 class="titre">Adresse ' . ($i + 1) . ':</h1>';
                echo '<p><strong>Street:</strong> ' . htmlspecialchars($street) . '</p>';
                echo '<p><strong>Street_no:</strong> ' . htmlspecialchars($streetno) . '</p>';
                echo '<p><strong>Type:</strong> ' . htmlspecialchars($type) . '</p>';
                echo '<p><strong>City:</strong> ' . htmlspecialchars($city) . '</p>';
                echo '<p><strong>Zip_code:</strong> ' . htmlspecialchars($zipcode) . '</p>';
                echo '<br>';

                // Insertar datos en la base de datos
                $query = "INSERT INTO address VALUES (NULL,'$street','$streetno','$type','$city','$zipcode')";
                
                if ($conn->query($query) === TRUE) {
                    echo "<li></strong>Addresse $i enregistrée avec succès.</strong></li>";
                } else {
                    echo "Erreur lors de l'enregistrement de l'adresse: " . $conn->error;
                }
            }
            ?>
        </ul>
        <?php
        // Cerrar la conexión a la base de datos
        $conn->close();
    } else {
        header("Location: ajouterAdresse.php");
        exit();
    }
    ?>
    <button type="submit" class="btn">Afficher toutes les Adresses</button>
</body>
</html>