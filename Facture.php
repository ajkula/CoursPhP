<?php



$qt = filter_input(INPUT_GET, 'qt', FILTER_SANITIZE_NUMBER_INT);
        $pu = filter_input(INPUT_GET, 'pu', FILTER_VALIDATE_FLOAT);
        
        if (!$qt or !$pu){
            echo 'INVALIDE';
            exit;
        }
        
        $total = $qt * $pu;
       echo " <h1>FACTURE</h1>
        <table>
        <tr>
            <td>La quantité :  <td>$qt</td></td>
            
            <td>Le prix unitaire : <td>$pu</td></td>
            
            <td>Sous-total : <td>$total</td></td>
            </tr>
        </table>";
       if ($total >= 100){
           $remise = ($total/100*5);
             echo "<br> Vous avez une remise de $remise";
             $total=$total-$remise;
             echo "<br> Total = $total";
             (float)$tva = ($total/100*19.6);
              echo "<br> TVA = $tva";
       } else {
           echo "<br> Total = $total";
           (float)$tva = ($total/100*19.6);
              echo "<br> TVA = $tva";
       }
     