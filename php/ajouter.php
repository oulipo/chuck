<?php
include("../lib/connexion.php");

$texte = $_POST["texte"] ?? "";
$resultat = [
    "id" => 0,
    "status" => "NOK"
];
if(!empty($texte)) {
    $stmt = $pdo->prepare("INSERT INTO citations (texte, date_insertion) VALUES (?,?)");
    $result = $stmt->execute([$texte, (new DateTime("now"))->format("Y-m-d")]);
    $id = $pdo->lastInsertId();
    if($result) {
        $resultat = [
            "id" => $id,
            "status" => "OK"
        ];
    }
}
echo json_encode($resultat);