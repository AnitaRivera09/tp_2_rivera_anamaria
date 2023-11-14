<?php
include "../Result/fonctions.php";
if(isset($_POST['ajouter']))
{
    ajouterAdresse($_POST);  
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css"/>
    <title>Formulaire d'adresses</title>
</head>
<body>
<h2>Saisissez les informations suivantes pour chacune des adresses:</h2>
    <form method="post">
    
    <?php 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Traiter le formulaire lorsqu'il est soumis
      $noadresses = isset($_POST['noadresses']) ? intval($_POST['noadresses']) : 0;    
    
    for ($i = 1; $i <= $noadresses; $i++) {?>        
        <fieldset>
        <legend><strong>Détails de l'adresse  <?php echo $i ?> </strong></legend>
        <label for="street"><strong>Street:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp</strong></label>
        <input type="text" name="street[]" required><br>
        <p></p>
        <label for="street_no"><strong>Street Number:<strong></label>
        <input type="text" name="street_no[]" required><br>
        <p></p>
        <label for="type"><strong>Type:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<strong></label>
        <select name="type[]" required>
            <option>Livraison</option>
            <option>Facturation</option>
            <option>Maison</option>
            <option>Bureau</option>
            <option>Autre</option>
        </select>
        <p></p>
        <label for="city"><strong>City:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<strong></label>
        <select name="city[]" required>
            <option>Montréal</option>
            <option>Toronto</option>
            <option>Vancouver</option>
            <option>Ontario</option>
            <option>Alberta</option>
            <option>Calgary</option>
        </select>
        <p></p>
        <label for="zip_code"><strong>Zip Code:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<strong></label>
        <input type="text" name="zip_code[]" required><br>
        <p></p>
        </fieldset><?php }?>
        <p></p>
        <button type="submit" class="buttons" name='ajouter'>Envoyer</button>
        <?php }?>
    </form>
</body>
</html>
