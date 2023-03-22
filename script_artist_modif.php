<?php 
// Récupération des valeurs :
$id = (isset($_POST['id']) && $_POST['id'] != "") ? $_POST['id'] : Null;
$title = (isset($_POST['title']) && $_POST['title'] != "") ? $_POST['nom'] : Null;
$url = (isset($_POST['url']) && $_POST['url'] != "") ? $_POST['url'] : Null;

// En cas d'erreur, on renvoie vers le formulaire
if ($id == Null) {
    header("Location: disc.php");
}
elseif ($nom == Null || $url == Null) {
    header("Location: disc_form.php?id=".$id);
    exit;
}

// Si la vérification des données est ok :
require "db.php"; 
$db = connexionBase();

try {
    // Construction de la requête UPDATE sans injection SQL :
    $requete = $db->prepare("UPDATE disc SET disc_title = :title, disc_url = :url WHERE disc_id = :id;");
    $requete->bindValue(":id", $id, PDO::PARAM_INT);
    $requete->bindValue(":title", $nom, PDO::PARAM_STR);
    $requete->bindValue(":url", $url, PDO::PARAM_STR);

    $requete->execute();
    $requete->closeCursor();
}

catch (Exception $e) {
    echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
    die("Fin du script (script_disc_modif.php)");
}

// Si OK: redirection vers la page disc_detail.php
header("Location: disc_detail.php?id=" . $id);
exit;

?>