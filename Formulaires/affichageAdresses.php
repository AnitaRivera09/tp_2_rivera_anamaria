<html>
    <head>
    <link rel="stylesheet" href="../CSS/page_bienvenue.css"/>
    </head>
<body>
    <h1 class="titre">Adresses Actuelles</h1>
    <form class="form" method="post" action="../Formulaires/pageBienvenue.php">
<?php 

//Données pour la connection
$username = "root"; 
$password = ""; 
$database = "ecom1_tp2"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
//qyery pour l'affichage
$query = "SELECT * FROM address";


echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">ID</font> </td> 
          <td> <font face="Arial">STREET</font> </td> 
          <td> <font face="Arial">NUMBER STREET</font> </td> 
          <td> <font face="Arial">TYPE</font> </td> 
          <td> <font face="Arial">CITY</font> </td>
          <td> <font face="Arial">ZIP CODE</font> </td> 
      </tr>';

      //affichage dans une tableau
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["id"];
        $field2name = $row["street"];
        $field3name = $row["street_nb"];
        $field4name = $row["type"];
        $field5name = $row["city"];
        $field6name = $row["zipcode"]; 

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
                  <td>'.$field6name.'</td>
              </tr>';
    }
    $result->free();
} 
?>
<button type="submit" class="btn">Retour à la page principale</button>
</body>
</html>
