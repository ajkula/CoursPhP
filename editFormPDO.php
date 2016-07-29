<?php
require 'conf/config.php';
require 'lib/libPDO.php';
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if ($id == null) {
    $action = "createPDO.php";
} else {
    $action = "updatePDO.php";
}



$connexion = getPDO();
$sql = "SELECT * FROM personnes WHERE personne_id=?";
$statement = $connexion->prepare($sql);
$statement->execute([$id]);
$data = $statement->fetch(PDO::FETCH_ASSOC);


if (!isset($data) || count($data) == 0) {
    $data = [
        'nom' => '',
        'prenom' => '',
        'date_naissance' => ''
    ];
}
?>

<html>
    <body>
        <form method="post" action="<?= $action ?>">

            <input type="hidden" name="id" value="<?= $id ?>">
            <div>
                <label>NOM<br>
                    <input type="text" name="nom" value="<?= $data['nom'] ?>">
                </label>
            </div>
            <br>
            <div>
                <label>PRENOM<br>
                    <input type="text" name="prenom" value="<?= $data['prenom'] ?>">
                </label>
            </div>
            <br>
            <div>
                <label>DATE NAISSANCE (1900-01-31)<br>
                    <input type="text" name="date_naissance" value="<?= $data['date_naissance'] ?>">
                </label>
            </div>
            <br>
            <button type="submit" name="submit" value="submit">Mettre a jour</button>
        </form>
    </body>
</html>

