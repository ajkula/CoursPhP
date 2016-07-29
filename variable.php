<?php

$texte = "il é blablabla";
$prix = 5.45;
$qt = 5;

$age = filter_input(INPUT_GET, 'age', FILTER_VALIDATE_INT);

// test l'existence du PARAM

if (empty($age)){
    echo "<br>Vous devez entrer param AGE";
    
}

echo "<br>Vous avez $age ans";

define('PI', 3.14116);

echo "<br>La circonference d'un cercle de rayon 10 est ". 2*PI*10;