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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <title> La page de détail</title>
    </head>
    <body>
        
        <h1> Details </h1><br>
 <div class="container mt-3">
        <form action ="script_artist_ajout.php" method="post">
        
    <label for="title">title </label><br>
    <input type="text" class="form-control" name="title" id="title" value="<?= $disc->disc_title ?>" readonly>
    <br><br>

    <label for="year">Year </label><br>
    <input type="text"class="form-control" name="year" id="year"value="<?= $disc->disc_year ?>" readonly>

    <br><br>
    <label for="label">Label </label><br>
    <input type="text" class="form-control" name="label" id="label"value="<?= $disc->disc_label ?>" readonly>

    <br><br>
    <label for="artist">Artist </label><br>
    <input type="text" class="form-control" name="artist" id="artist"value="<?= $disc->artist_name?>"readonly>

  <br><br>
    <label for="genre">Genre </label><br>
    <input type="text" class="form-control" name="Genre" id="genre"value="<?= $disc->disc_genre ?>" readonly>
    <br><br>
    <label for="price">price</label><br>
    <input type="text" class="form-control" name="price" id="price"value="<?= $disc->disc_price ?>" readonly>

    <br><br>
    <div class="d-grid gap-2 d-md-block">
    <a href="disc_form.php?id=<?= $disc->disc_id ?>"class="btn btn-primary">Modifier</a>
    <a href="script_artist_delete.php?id=<?= $disc->disc_id ?>"class="btn btn-primary">Supprimer</a>
    
    <a href="<?= $disc->disc_id ?>"class="btn btn-primary"value="Modification">Retour</a>

</div>
    </form>
    </div>
    </body>
</html>