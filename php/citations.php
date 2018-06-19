<?php 
include("../lib/connexion.php");
$q = $_GET["q"] ?? "";

function citations($dbh, $q = "") {
    $stmt = $dbh->prepare("SELECT * FROM citations WHERE texte LIKE ?");
    $stmt->execute(['%'.$q.'%']);
    $citations = $stmt->fetchAll();
    return(json_encode($citations));
}

echo citations($pdo, $q);