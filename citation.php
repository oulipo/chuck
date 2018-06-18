<?php 
include("lib/connexion.php");

function citationAuHasard($dbh) {
    $stmt = $dbh->prepare("SELECT * FROM citations ORDER BY RAND() LIMIT 1");
    $stmt->execute();
    $citation = $stmt->fetch();
    //var_dump($citation);
    return(json_encode($citation));
}

echo citationAuHasard($pdo);