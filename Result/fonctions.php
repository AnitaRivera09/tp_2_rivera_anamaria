<?php

function ajouterAdresse($street, $streetno, $type, $city, $zipcode){

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
    return $conn; 

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

                // Insertar datos en la base de datos
                $query = "INSERT INTO address VALUES (NULL,'$street','$streetno','$type','$city','$zipcode')";
                
                if ($conn->query($query) === TRUE) {
                    echo "<li>Addresse $i enregistrée avec succès.</li>";
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
}
?>
</body>
</html>


