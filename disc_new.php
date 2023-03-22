<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>PDO - Ajout</title>
</head>
<body>

<h1>Ajouter un Vinyle</h1>

    

    <br>
    <br>
<div class="container">
    <form action ="script_disc_ajout.php" method="post" enctype="multipart/form-data">
      <div class="row">
      <div class="col">
        <label for="title">Title</label><br>
        <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
        </div>
        <br><br>
        
        <label for="artist">artist</label><br>
        <input type="text"class="form-control" placeholder="Enter artist" name="artist"> 
        <br><br>

        <label for="year">Year</label><br>
        <input type="text" class="form-control" placeholder="Enter year" name="year"> 
        <br><br>

        <label for="genre">Genre </label><br>
        <input type="text" class="form-control" placeholder="Enter genre" name="genre">
        <br><br>

        <label for="label">Label </label><br>
        <input type="text"class="form-control" placeholder="Enter label" name="label"> 
        <br><br>
        <label for="price">price</label><br>
        <input type="text" class="form-control" placeholder="Enter price" name="price">
        <br><br>
        

   </div>
        </div>
    
    <input type="submit" class="btn btn-primary"value="Ajouter">
    <input type="submit" class="btn btn-primary"value="Retour">

    </form>
    
    </div>
</body>
</html>