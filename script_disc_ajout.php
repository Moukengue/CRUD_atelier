<?php
    // Récupération du titre :
    if (isset($_POST['title']) && $_POST['title'] != "") {
        $title = $_POST['title'];
    }
    else {
        $title = Null;
    }
    // En cas d'erreur, on renvoie vers le formulaire
    if ($nom == Null || $url == Null) {
        header("Location: disc_new.php");
        exit;
    }

 // Récupération artist :
 if (isset($_POST['artist']) && $_POST['artist'] != "") {
    $title = $_POST['artist'];
}
else {
    $title = Null;
}
// En cas d'erreur, on renvoie vers le formulaire
if ($nom == Null || $url == Null) {
    header("Location: disc_new.php");
    exit;
}

 // Récupération d'année:
 if (isset($_POST['year']) && $_POST['year'] != "") {
    $title = $_POST['year'];
}
else {
    $title = Null;
}
// En cas d'erreur, on renvoie vers le formulaire
if ($nom == Null || $url == Null) {
    header("Location: disc_new.php");
    exit;
}
  // Récupération du genre :
  if (isset($_POST['genre']) && $_POST['genre'] != "") {
    $title = $_POST['genre'];
}
else {
    $title = Null;
}
// En cas d'erreur, on renvoie vers le formulaire
if ($nom == Null || $url == Null) {
    header("Location: disc_new.php");
    exit;
}
 // Récupération du label:
 if (isset($_POST['label']) && $_POST['label'] != "") {
    $title = $_POST['label'];
}
else {
    $title = Null;
}
// En cas d'erreur, on renvoie vers le formulaire
if ($nom == Null || $url == Null) {
    header("Location: disc_new.php");
    exit;
}

 // Récupération du price :
 if (isset($_POST['price']) && $_POST['price'] != "") {
    $title = $_POST['price'];
}
else {
    $title = Null;
    // En cas d'erreur, on renvoie vers le formulaire
    if ($nom == Null || $url == Null) {
        header("Location: disc_new.php");
        exit;
    }
    
}
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }
 }

    // S'il n'y a pas eu de redirection vers le formulaire (= si la vérification des données est ok) :
    require "db.php"; 
    $db = connexionBase();


try {
    // Construction de la requête INSERT sans injection SQL :
    $requete = $db->prepare("INSERT INTO disc (disc_title, disc_url) VALUES (:title, :url);");

    // Association des valeurs aux paramètres via bindValue() :
    $requete->bindValue(":url", $url, PDO::PARAM_STR);
    $requete->bindValue(":title", $title, PDO::PARAM_STR);

    // Lancement de la requête :
    $requete->execute();

    // Libération de la requête (utile pour lancer d'autres requêtes par la suite) :
    $requete->closeCursor();
}

// Gestion des erreurs
catch (Exception $e) {
    var_dump($requete->queryString);
    var_dump($requete->errorInfo());
    echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
    die("Fin du script (script_disc_ajout.php)");
}

// Si OK: redirection vers la page artists.php
header("Location: disc.php");

// Fermeture du script
exit;
?>