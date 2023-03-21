<?php // On se connecte à la BDD via notre fichier db.php :
    require "db.php";
    $db = connexionBase();

    // On récupère l'ID passé en paramètre :
    $id = $_GET["id"];

    // On crée une requête préparée avec condition de recherche :
    $requete = $db->prepare("SELECT * FROM  disc inner join  artist where disc_id=?");
    // on ajoute l'ID du disque passé dans l'URL en paramètre et on exécute :
    $requete->execute(array($id));

    // on récupère le 1e (et seul) résultat :
    $disc = $requete->fetch(PDO::FETCH_OBJ);

    // on clôt la requête en BDD
    $requete->closeCursor();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PDO - Détail</title>
    </head>
    <body>
        
        <h1> Details </h1><br>

        <form action ="script_artist_ajout.php" method="post">

<label for="nom_for_label">title </label><br>
<input type="text" name="title" id="nom_for_label">
<br><br>

<label for="url_for_label">Year </label><br>
<input type="text" name="year" id="url_for_label">

<br><br>
<label for="url_for_label">Label </label><br>
<input type="text" name="label" id="url_for_label">

<br><br>
<label for="url_for_label">Artist </label><br>
<input type="text" name="artist" id="url_for_label">

<br><br>
<label for="url_for_label">Genre </label><br>
<input type="text" name="Genre" id="url_for_label">
<br><br>
<label for="url_for_label">price</label><br>
<input type="text" name="price" id="url_for_label">

<br><br>
<input type="submit" value="Ajouter"><br>


</form>
    </body>
</html>