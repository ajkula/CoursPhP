<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $nomUtilisateur = filter_input(INPUT_GET, 'nom');
        $age = filter_input(INPUT_GET, 'age', FILTER_SANITIZE_NUMBER_INT);
        $note = filter_input(INPUT_GET, 'note', FILTER_SANITIZE_NUMBER_INT);
        ?>

        <h1>Bonjour
            <?php
            echo $nomUtilisateur;
            echo "<br>";
            if ($age >= 180) {
                echo 'Vous etes mort!';
            } elseif ($age >= 18) {
                echo 'Vous etes majeur';
            } else {
                echo 'Vous etes mineur';
            }
            echo "<br>";

            switch ($note) {
                case 1:
                    echo 'Vous etes nul';
                    break;
                case 2:
                    echo "vraiment pas terrible";
                    break;
                case 3:
                case 4:
                case 5:
                    echo "peut mieux fair popo";
                    break;
                default :
                    echo 'Les notes doivent etre entre 1 & 2';
            }
            
            for ($i=1; $i<=3; $i++){
            echo "<p style=\"color: pink\">&hearts;</p>";
            }
            
            $commentaire = ['peut mieux fair popo','vraiment pas terrible','Vous etes nul'];
            
            if(array_key_exists($note, $commentaire)){
                echo $commentaire[$note];
            } else {
                echo "notes entre 1 et ...";
            }
            
            ?>

        </h1>
        <h1>Table multi de 5</h1>
        <table>
            <?php
            for($i=1; $i<=10; $i++):
                
            ?>
            <tr> 
                <?php
            for($k=1; $k<=10; $k++):
                
            ?>
                
                <td style="color: pink">&hearts;</td>
                <td><?= $i*$k ?></td>
                
                <?php
            endfor;
            ?>
            </tr>
            <?php
            endfor;
            ?>
        </table>

    </body>
</html>
