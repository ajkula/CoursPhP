<?php
// 1. recup. des variables
$nombre = filter_input(INPUT_POST, 'nombre', FILTER_VALIDATE_INT);
$nombreADeviner = filter_input(INPUT_POST, 'nombreADeviner');
$essais = filter_input(INPUT_POST, 'essais');
$submit = filter_input(INPUT_POST, 'submit');
// 2. Cas ou le script est exec. pour la 1ere fois
// debut du jeu
if (!$submit){
$nombreADeviner = rand(1, 100);
$essais = 0;
echo "<h2>Debut du jeu</h2>";
}

// 3. gestion erreurs
$message = "";

// verif. saise
if(empty($nombre)){
    $message = "vous devez saisir un nbr";
} elseif($nombre<1 || $nombre >100) {
    $message = "nombre entre 1 & 100 SVP!";
}

// 4. traitement
if($message==""){
    if($nombre== $nombreADeviner){
        $message = "Gagné en $essais coups!!";
        $nombreADeviner = rand(1, 100);
        $essais = 0;
    } elseif ($nombre < $nombreADeviner) {
        $message = "Trop petit... kiki";
    $essais++;
} else {
    $message = "Trop grand!";
    $essais++;
}
}
?>
<form method="post" action="devine-nombre.php">
    <div>
        <label>devine nombre : </label>
        <input type="number" name="nombre" placeholder="votre nombre">
        <input type="hidden" name="nombreADeviner" value="<?=$nombreADeviner?>">
        <input type="hidden" name="essais" value="<?=$essais?>">
        <button type="submit" name="submit" value="valider">Valider</button>
       <br>
        
    </div>
</form>

<p><?=$message?></p>