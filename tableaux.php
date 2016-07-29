<?php


$tab = array('un frigogidaire', 'un micronde');


$tab[2] = "un pistolatcho a bonbecs";

array_push($tab, 'un popo');

$tab[count($tab)] = "un moulinex";

var_dump($tab);

echo "<ul>";
$tabSize = count($tab);
for ($i = 0; $i < $tabSize; $i++){
    echo "<li>".$tab[$i]."</li>";
}
echo "</ul>";

// trier le TAB[]
sort($tab, SORT_LOCALE_STRING);

echo "<form action='tableaux.php' method='get'>";
echo "<select>";

// source puis valeure capturee
foreach ($tab as $value){
    echo "<option>".$value."</option>";
}
echo "</select>";
echo "<input type='submit' value='Valider'></form>";

$contact = [
    'nom' => 'bebel',
    'prenom' => 'JR',
    'age' => 24
];

echo $contact['nom'];
$contact['nom'] = 'peperoni';
$contact['prenom'] = 'loubavitch';
$contact['tel'] = '0800000000';

echo "<ol>";
foreach ($contact as $key => $val){
    echo "<li> $key = $val </li>";
}
echo "</ol>";

$liste = [
    ['nom' => 'Popol'],
    ['nom' => 'reginald'],
    ['nom' => 'tabernacle']
];
