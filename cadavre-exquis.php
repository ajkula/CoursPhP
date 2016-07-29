<?php

$nom = [
    "le chien",
    "le chat",
    "mon ami",
    "le développeur",
    "le chef de projet",
    "le client",
    "le formateur",
    "le gateau",
    "l'ordinateur",
    "la voiture",
    "le vélo",
    "le médecin",
    "l'enfant",
    "le graphiste",
    "l'oiseau",
    "le programme",
    "le jeu",
    "l'oiseau",
    "le bébé",
    "la soupe",
    "l'artiste",
    "le ministre",
    "le président",
    "le concierge",
    "le cheval"
];

$verbe = [
    "mange",
    "regarde",
    "code",
    "fabrique",
    "admire",
    "aime",
    "déteste",
    "rencontre",
    "examine",
    "évalue",
    "percute",
    "ausculte",
    "dessine",
    "brocarde",
    "exécute",
    "lance",
    "gratte",
    "chatouille",
    "touche",
    "frappe",
    "menace",
    "cajole",
    "interpelle",
    "insulte"

];

$complement = [
    "dans la voiture",
    "avec lenteur",
    "sur la tour Eiffel",
    "dans la cabane",
    "pour avoir une bonne note",
    "pour la bonne raison",
    "avec rapidité",
    "aujourd'hui",
    "sans hésitation",
    "dans son bureau",
    "avec détermination",
    "en plein jour",
    "la nuit",
    ""
];

for($i=0;$i<20;$i++){
echo $nom[rand(0, count($nom)-1)]." ";
echo $verbe[array_rand($verbe)]." ";
echo $nom[array_rand($nom)]." ";
echo $complement[array_rand($complement)]."<br>";
}
?>