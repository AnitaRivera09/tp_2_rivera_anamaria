<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page Bienvenue</title>
    <link rel="stylesheet" href="../CSS/page_bienvenue.css">
</head>
<body>

  <?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Traiter le formulaire lorsqu'il est soumis
    $noadresses = isset($_POST['noadresses']) ? intval($_POST['noadresses']) : 0;
    global $noadresses;

   }
    ?>
    
    <!--FORMULAIRE---->
    <form class="form" method="post" action="../Formulaires/ajouterAdresse.php">
        
        <!--TITRE------------------------>
        <h1 class="titre">Entrez vos coordonnées ici:</h1>
        
        <!--INPUTS ENTRÉES DE DONNÉES------------------------------------------------>
        <input class="inputs" type="text" name="nom" placeholder="Nom" required maxlength="30">
        <input class="inputs" type="text" name="prenom" placeholder="Prenom" required maxlength="30">
        <input class="inputs" type="number" name="noadresses" placeholder="Nombre d'adresses" required min="1" maxlength="30">
        
                
        <!--BOTON-DE-REGISTRARSE-------------------------->
        <input type="submit" class="btn" value="Envoyer">
		<input type="reset" class="btn" value="Annuler">
           
    </form>   
    
</body>
</html>