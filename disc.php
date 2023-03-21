<?php
 include "db.php"; // inclut la connexion a la base de 
 $db = connexionBase();
 $requete = $db->query("SELECT * FROM  disc inner join  artist on artist.artist_id=disc.artist_id");
 $artists = $requete->fetchAll(PDO::FETCH_OBJ);
 $requete->closeCursor();


 ?>

 <!DOCTYPE html>
 <html lang="fr">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title> Liste Atelie</title>
 </head>
 <body>
    <h1>Liste des disques (15)</h1><br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <button class="btn btn-primary me-md-2" type="button">Ajouter</button>
</div>
    <div class="container">
 <div class= "row">
 <?php foreach ($artists as $artist): // pour boucle sur la variable artists?>
    
 <table class="col-6">
    <tr>
     <td><img  src="img/jaquettes/<?=$artist->disc_picture ?>" class="img-responsive" style="width: 18rem;"></td>
     <td>
        <td>
        <p><?= $artist->disc_title ?></p>
            <p><?= $artist->artist_name ?></p>
            <p>Label:<?=$artist->disc_label ?></p>
            <p>Year:<?=$artist->disc_year ?></p>
            <p>Genre:<?=$artist->disc_genre ?></p>
            <td><a href="disc_detail.php?id=<?= $artist->artist_id ?>">Détail</a></td>
     </td>
    </tr>
        

    

    </table>

    
    <?php endforeach; ?>
    </div>
 </div>
 </body>
 </html>
       
 