<?php
require_once "connexion.php";
$id=2;
$sql="SELECT * FROM etudiants WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute([':id' => $id]);
$etudiant = $stmt->fetch(PDO::FETCH_ASSOC);
echo $etudiant["Nom"]. " : " . $etudiant["Note"];