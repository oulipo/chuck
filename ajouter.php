<?php
include("lib/connexion.php");

$texte = $_POST["texte"] ?? "";

if(!empty($texte)) {
    $stmt = $pdo->prepare("INSERT INTO citations (texte, date_insertion) VALUES (?,?)");
    $result = $stmt->execute([$texte, (new DateTime("now"))->format("Y-m-d")]);
    if($result) {
        echo "OK";
    } else {
        echo "NOK";
    }
} else {
    echo "NOK";
}