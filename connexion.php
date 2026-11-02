<?php
$host = "localhost";
$dbname = "ecole";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=localhost;dbname=ecole;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion à la base de données réussie !";
} catch (PDOException $e) {
    die("Erreur de connexion : Réessayer plus tard. ");
}
