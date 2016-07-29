<?php
require 'conf/config.php';
require 'lib/libPDO.php';



function htmlOption($table) {
    switch ($table) {
        case 'formation':
            $sql = "SELECT formation_id as id, formation_libelle as libelle FROM formations";
            break;
        case 'personne':
            $sql = "SELECT personne_id as id, CONCAT_WS(' ', prenom, nom) as libelle FROM personnes";
            break;
        default :
            $sql = NULL;
    }

    $html = "";

    if ($sql != NULL) {
        $connexion = getPDO();
        $resultSet = $connexion->query($sql);
        $data = $resultSet->fetchAll();
        $resultSet = NULL;

        foreach ($data as $item) {
            $html.="<option value=" . $item['id'].">" . $item['libelle'] . "</option>";
        }
    }
    return $html;
}

$id_personne = filter_input(INPUT_POST, "personne_id", FILTER_VALIDATE_INT);
$id_formation = filter_input(INPUT_POST, "formation_id", FILTER_VALIDATE_INT);
$submit = filter_input(INPUT_POST, 'submit', FILTER_SANITIZE_STRING);

if (isset($submit)){
    
    try {
        $connexion = getPDO();
        $sql = "INSERT INTO inscription_formation (personne_id, formation_id) "
                . "VALUES (?,?)";
        $statement = $connexion->prepare($sql);
        $statement->execute([$id_personne, $id_formation]);
    } catch (PDOException $exc) {
        echo $exc->getMessage();
    } catch (Exception $exc){
        echo $exc->getTraceAsString();
    }

            
}


?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
    </head>

    <body>
        <form action="inscriptionPHP.php" method="post">
            <select name="personne_id">
                <option value="0">Choisissez une personne</option>
                <?= htmlOption('personne') ?>
            </select>
            <select name="formation_id">
                <option value="0">Choisissez une formation</option>
                <?= htmlOption('formation') ?>
            </select>
            <button type="submit" name="submit" value="submit">Valider</button>

        </form>

    </body>
</html>

<?php

$connexion = getPDO();
$sql = "SELECT * FROM inscrits_formation";
$resultSet = $connexion->query($sql);
echo "<div style='background-color: #b0fff1'>";
echo "<table>";
while ($row = $resultSet->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr><td>" . $row['prenom']  . " </td><td> " . $row['nom']. "</td><td> inscrit a : </td><td>". $row['formation_libelle']."</td><td><button type='submit' name='submit' value='submit'>SE DESINSCRIRE</button></td></tr>";
}
echo '</table>';
echo "</div>";