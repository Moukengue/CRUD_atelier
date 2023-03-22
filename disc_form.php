<?php  
 // On charge l'enregistrement correspondant à l'ID passé en paramètre :
 require "db.php";
 $db = connexionBase();
 $requete = $db->prepare("SELECT * FROM  disc inner join  artist where disc_id=?");
 $requete->execute(array($_GET["id"]));
 $disc = $requete->fetch(PDO::FETCH_OBJ);
 $requete->closeCursor();
?>








<!DOCTYPE html>
 <html lang="fr">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title> modification</title>
 </head>
 <body>


<br>
<br>
<div class="container">
<form action ="script_disc_modif.php" method="post">

<label for="title">title </label><br>
    <input type="text" name="title" id="title" value="<?= $disc->disc_title ?>" readonly>
    <br><br>

    <label for="year">Year </label><br>
    <input type="text" name="year" id="year"value="<?= $disc->disc_year ?>" readonly>

    <br><br>
    <label for="label">Label </label><br>
    <input type="text" name="label" id="label"value="<?= $disc->disc_label ?>" readonly>

    <br><br>
    <label for="artist">Artist </label><br>
    <input type="text" name="artist" id="artist"value="<?= $disc->artist_name?>"readonly>

  <br><br>
    <label for="genre">Genre </label><br>
    <input type="text" name="Genre" id="genre"value="<?= $disc->disc_genre ?>" readonly>
    <br><br>
    <label for="price">price</label><br>
    <input type="text" name="price" id="price"value="<?= $disc->disc_price ?>" readonly>
  
    <br><br>
  
    <a href="disc.php" class="btn btn-primary" aria-current >Annuler</a>
    <a href="script_artist_delete.php?id=<?= $disc->disc_id ?>"class="btn btn-primary">Supprimer</a>
    
    
    </div>
</form>
</body>
</html>