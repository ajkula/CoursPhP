<?php

var_dump($_POST);


$nom = filter_input(INPUT_POST, 'nom');
$competences = filter_input(INPUT_POST, 'competences',FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY);

$conditions = filter_input(INPUT_POST, 'conditions');

$age = filter_input(INPUT_POST, 'age');
$verifAge= filter_input(INPUT_POST, 'verifAge');

if (isset($conditions)){
    echo '<p>Vous acceptez les CGV</p>';
}

echo "VOUS ETES UN DINGUE ".$nom;

if ($age!=$verifAge){
    echo '<br>TRICHEUR!';
}

if (in_array("PHP", $competences) and !(in_array("java", $competences))){
    echo '<h1>Espece de shnouf!</h1>';
}