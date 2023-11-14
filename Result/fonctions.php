<?php

function connexionDb(){
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
}

function ajouterAdresse($data){

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $streets = $_POST["street"];
        $street_nos = $_POST["street_no"];
        $types=$_POST["type"];
        $citys=$_POST["city"];
        $zip_codes=$_POST["zip_code"];

        $conn = connexiondb();

    for ($i = 0; $i < count($streets); $i++) {
        $street = $conn->real_escape_string($streets[$i]);
        $street_no = $conn->real_escape_string($street_nos[$i]);
        $type = $conn->real_escape_string($types[$i]);
        $city = $conn->real_escape_string($citys[$i]);
        $zip_code = $conn->real_escape_string($zip_codes[$i]);

    
    $query = "INSERT INTO address VALUES (NULL,'$street','$street_no','$type','$city','$zip_code')";
    
        
        if ($conn->query($query) !== TRUE) {
            echo "Error al insertar datos: " . $conn->error;
        }
    }

    echo "Datos insertados correctamente.";
}

// Cerrar la conexión
$conn->close();
    }
?>



