<?php

require 'conf/config.php';
require 'lib/libPDO.php';

$connexion = getPDO();
$sql = "SELECT * FROM inscrits_formation";
$resultSet = $connexion->query($sql);

echo "<form action='deletePDO.php'><table>";
while ($row = $resultSet->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr><td>" . $row['nom'] . " </td><td>" . $row['prenom'] . " </td><td>" . $row['date_naissance'] . "</td><td><button type='submit' name='id' value='" . $row['personne_id'] . "'>DELETE</button></td><td><a href='./editFormPDO.php?id=" . $row['personne_id'] . "'>editer</a></td></tr>";
}

echo "</table></form>";
echo ("<a href='formPDO.php'>AJOUTER</a>");
