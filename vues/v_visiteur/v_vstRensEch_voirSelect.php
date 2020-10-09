<?php
    if(empty($lesLotSelect))
    {
        echo '
        <div class = "vstAjouter_case">
            <div class = "vst_titre">
            Pas d\'information dans la table
            </div>
            <div class = "vst_contenue">
            Il n\'y a pas de donnée dans ce que vous avez selectionné.
            <form id = "retour" method = "POST" action = "index.php?uc=VstRensEch&action=select" style = "font-size:1.5vw; margin-top: 1vw;">
            <center>
                <button type = "submit" class = "bt_valider" style = "font-size : 0.8vw;"> RETOUR </button>
            </center>
            </form>
            </div>
        </div>';
    }
    else
    {
?>
<div class = "vstAjouter_case">
    <div class = "vst_titre">
        Renseignement d'Échantillon
    </div>
    <form id = "valider" method = "POST" action = "index.php?uc=VstRensEch&action=ajout" style = "font-size:1.5vw;">
    <div class = "vst_contenue">
        <?php
        echo '<table class="table">
            <tr>
                <th class="soustable"> numéro Lot </th>
                <th class="soustable"> numéro Échantillon </th>
                <th class="soustalbe"> Séléctionner </th>
            </tr>
            ';

            $cpt = 0;

            foreach($lesLotSelect as $leLotSelect)
            {
                echo '
                <tr>
                    <td> ' . $leLotSelect['numLot'] . ' </td>
                    <td> ' . $leLotSelect['numEchant'] . ' </td>
                    <td> <input type="checkbox" name="numEchant' . $cpt . '" value="' . $leLotSelect['numEchant'] .'"><input type="hidden" name="numLot" value="' . $leLotSelect['numLot'] .'" 
                </tr>';

                $cpt++;
            }
            echo'</table>';
        ?>
        <br/>
        <center>
            <button type = "submit" class = "bt_valider" style = "font-size : 0.8vw;"> VALIDER </button>
        </center>
        </form>
    </div>
</div>
<?php
    }
?>