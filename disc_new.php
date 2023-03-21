<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDO - Ajout</title>
</head>
<body>

<h1>Ajouter un Vinyle</h1>

    <a href="disc.php"><button>Retour à la liste des discs</button></a>

    <br>
    <br>
<div class="container">
    <form action ="script_disc_ajout.php" method="post">

        <label for="nom_for_label">Title :</label><br>
        <input type="text" name="title " placeholder="Enter title">

        <br><br>

        <label for="url_for_label">Year :</label><br>
        <input type="text" name="artist"placeholder="Enter artist">
        <br><br>

        <label for="url_for_label">Year :</label><br>
        <input type="text" name="year"placeholder="Enter year">
        <br><br>

        <Genre for="url_for_label">Genre :</Genre><br>
        <input type="text" name="artist"placeholder="Enter genre">
        <br><br>

        <label for="url_for_label">Label:</label><br>
        <input type="text" name="label"placeholder="Enter label">
        <br><br>
        <label for="url_for_label">price :</label><br>
        <input type="text" name="price"placeholder="Enter price">
        <br><br>
      
        <input type="submit" value="Ajouter">

    </form>
    </div>
</body>
</html>