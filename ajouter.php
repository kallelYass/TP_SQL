<?php
require_once "connexion.php";
$sql ="INSERT INTO etudiants (Nom, Note) VALUES (:Nom, :Note)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    ':Nom' => "Ridha",
    ':Note' => 15
]);
echo "Ajout de l'étudiant réussi !". $pdo->lastInsertId();