<?php

$catalogue = array(
    array(
        'designation' => 'La peste',
        'prix' => 10.80,
        'categorie' => 'Roman',
        'auteur' => 'Albert Camus',
        'editeur' => 'Gallimard'
    ),
    array(
        'designation' => 'PHP pour les nuls',
        'prix' => 15.80,
        'categorie' => 'Informatique',
        'auteur' => 'Janet Valade',
        'editeur' => 'First Interact'
    ),
    array(
        'designation' => 'Essais',
        'prix' => 38.70,
        'categorie' => 'Philosophie',
        'auteur' => 'Montaigne',
        'editeur' => 'Pocket'
    ),
    array(
        'designation' => 'Winston Churchill',
        'prix' => 28.30,
        'categorie' => 'Biographie',
        'auteur' => 'François Kersaudy',
        'editeur' => 'Tallandier'
    ),
    array(
        'designation' => 'Barcelone week end',
        'prix' => 9.00,
        'categorie' => 'Guide de voyage',
        'auteur' => 'Michelin',
        'editeur' => 'Michelin'
    ),
);

$nbCatalogue = count($catalogue);

echo "<body ><h1>TABLE A PAPA</h1><br><table style='display: center'><thead><tr>";

foreach ($catalogue as  $value) {

}

    foreach ($value as $cle => $val) {
      echo "<th>$cle</th>";
}
echo "</tr>";
echo "<tbody>";

$nbCatalogue = count($catalogue);


for($i=0; $i< $nbCatalogue; $i++){  
    $i%2==0 ?$color="black":$color = "white";
    $i%2==0 ?$char="white":$char = "black";
    echo   "<tr style='background-color: $color;color:$char'><td>".$catalogue[$i]['designation']."</td>".
            "<td>".$catalogue[$i]['prix']. "</td>" .
            "<td>".$catalogue[$i]['categorie']. "</td>" .
            "<td>".$catalogue[$i]['auteur']. "</td>" .
            "<td>".$catalogue[$i]['editeur']. "</td></tr>";
}

echo "</tbody></table></body>";
