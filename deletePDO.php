<?php

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if ($id != NULL){
    require 'conf/config.php';
    require 'lib/libPDO.php';
    
    try {
        
    
    
    $sql = "DELETE FROM personnes WHERE personne_id = $id";
    
    $connexion = getPDO();
    $connexion ->exec($sql);
    header('location:testPDO.php');
    
    
    } catch (Exception $ex) {
        echo($ex);
    }
}

