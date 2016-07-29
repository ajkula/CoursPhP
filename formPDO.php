<?php

?>

<html>
    <body>
        <form method="post" action="createPDO.php">
            <div>
                <label>NOM<br>
                    <input type="text" name="nom">
                </label>
            </div>
            <br>
            <div>
                <label>PRENOM<br>
                    <input type="text" name="prenom">
                </label>
            </div>
            <br>
            <div>
                <label>DATE NAISSANCE (1900-01-31)<br>
                    <input type="text" name="date_naissance">
                </label>
            </div>
            <button type="submit" name="submit" value="submit">Valider</button>
        </form>
    </body>
</html>