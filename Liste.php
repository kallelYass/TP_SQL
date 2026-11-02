<?php
require_once "connexion.php";
$sql = "SELECT * FROM etudiants";
$stmt = $pdo->query($sql);
$etudiants = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "</br><h2>Liste des étudiants</h2><br>";

?>
<link rel="stylesheet" href="style.css">
<table>
  <tr><th>Nom</th><th>Note</th></tr>
<?php foreach ($etudiants as $e) { ?>
  <tr>
    <td><?= $e["Nom"] ?></td>
    <td><?= $e["Note"] ?></td>
  </tr>
<?php } ?>
</table>
<p><a href="ajouter.php">+ Ajouter un étudiant</a></p>
