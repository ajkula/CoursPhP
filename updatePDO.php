<?php

require 'conf/config.php';
require 'lib/libPDO.php';

$nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
$prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_STRING);
$date_naissance = filter_input(INPUT_POST, 'date_naissance', FILTER_SANITIZE_STRING);
$submit = filter_input(INPUT_POST, 'submit');
$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
$prenom = ucfirst($prenom);

// && isset($submit)
if ($nom != NULL && $submit != NULL) {
    if ($prenom == '') {
        $prenom = NULL;
    }

    if ($nom == '') {
        $nom = NULL;
    }
    try {
        $sql = "UPDATE `formation_sql`.`personnes` SET `nom`=UCASE(:nom), `prenom`=:prenom, `date_naissance`=:date_naissance WHERE `personne_id`=:id";

        $connexion = getPDO();
        $statement = $connexion->prepare($sql);
        $statement->execute(['nom' => $nom, 'prenom' => $prenom, 'date_naissance' => $date_naissance, 'id' => $id]);
        header('location:testPDO.php');
    } catch (Exception $ex) {
        echo($ex->getMessage());
    }
}


