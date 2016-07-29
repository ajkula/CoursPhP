<?php

function somme($nbr1, $nbr2 = 5) {
    echo $nbr1 + $nbr2 . "<br>";
}

function produit($n1, $n2) {
    return $n1 * $n2;
}

for ($i = 0; $i < 10; $i++) {
    somme(2, produit(2, $i));
}

echo "<br><br><br><br>";

function TTC($HT = 200, $tauxTva = 19.6) {
    if (!filter_var($HT, FILTER_VALIDATE_FLOAT)) {
        throw new InvalidArgumentException;
    }
    if (!filter_var($tauxTva, FILTER_VALIDATE_FLOAT)) {
        throw new InvalidArgumentException;
    }
    echo "montant HT : " . $HT . "€<br>" . " Taux TVA : " . $tauxTva . "%<br>" . "Montant TTC : " . (($HT * $tauxTva / 100) + $HT) . "€<br><br>";
}

TTC(300);


function calc($n){
    if($n==1){
        return 1;
    } else {
        return $n * calc($n-1);
    }
}
for($k=1;$k < 10; $k++){
echo calc($k)."<br>";
}

function hello($nom){
    echo "hello $nom";
}

hello($nom);