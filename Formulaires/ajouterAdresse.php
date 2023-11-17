<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Registre d'adresses</title>
    <link rel="stylesheet" href="../CSS/page_bienvenue.css">
</head>
<body>
<?php

   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Traiter le formulaire lorsqu'il est soumis
    $noadresses = isset($_POST['noadresses']) ? intval($_POST['noadresses']) : 0;
    global $noadresses;
    //formulaire
    for ($i = 1; $i <= $noadresses; $i++) {?>   
        <form class="form" method="post" action="../Formulaires/confirmationAdresses.php">     
        <fieldset>
        <legend><strong><h1 class="titre">Détails de l'adresse  <?php echo $i ?></h1></strong></legend>
        <input class="inputs" placeholder="Street" type="text" name="street_<?php echo $i; ?>" required>
        <input class="inputs" placeholder="Street Number" type="text" name="streetno_<?php echo $i; ?>" required>
        <select class="inputs" placeholder="Type" name="type_<?php echo $i; ?>" required>
            <option>Livraison</option>
            <option>Facturation</option>
            <option>Maison</option>
            <option>Bureau</option>
            <option>Autre</option>
        </select>
        <select class="inputs" placeholder="City" name="city_<?php echo $i; ?>" required>
            <option>Montréal</option>
            <option>Toronto</option>
            <option>Vancouver</option>
            <option>Ontario</option>
            <option>Alberta</option>
            <option>Calgary</option>
        </select>
        <input class="inputs" placeholder="Zip Code" type="text" name="zipcode_<?php echo $i; ?>" required>
        </fieldset><?php }?>
        <p></p>
        <input type="hidden" name="noadresses" value="<?php echo $noadresses;?>">
        <button type="submit" class="btn">Envoyer</button>
        <?php }
    else {
        header("Location: pageBienvenue.php");
        exit();
    }?>   
}
