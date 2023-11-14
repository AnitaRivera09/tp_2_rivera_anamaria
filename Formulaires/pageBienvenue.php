<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <form method="post" action="../Formulaires/ajouterAdresse.php">
    <link rel="stylesheet" href="../CSS/style.css"/>
    <title>Page d'inscription</title>
</head>
<body>

<?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Traiter le formulaire lorsqu'il est soumis
    $noadresses = isset($_POST['noadresses']) ? intval($_POST['noadresses']) : 0;
    global $noadresses;

   }
    // Formulaire pour saisir le nombre d'adresses
    ?>
    <h1>Formulaire d'inscription</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <h1>Bienvenue!</h1>
    <fieldset>
    <legend><strong>Vos Coordonnées</strong></legend>
    <label><strog>Nom:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp</strog></label>
    <input type="text" name="nom" id="test" size="20" maxlength="20" required></br>
    <p></p>
    <label><strog>Prénom:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp</strog></label>
    <input type="text" name="prenom" id="test" size="20" maxlength="20" required></br>
    <p></p>
    <label for="nomadresses">Nombre Adresses:&nbsp;&nbsp</label>
    <input type="number" name="noadresses" required min="1">
    <p></p>
    <button class="buttons">Envoyer</button>
    <button class="buttons" type="reset">Anuler</button>
    </fieldset>
    <p></p>
 <form>