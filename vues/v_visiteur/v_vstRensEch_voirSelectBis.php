<?php
    if(empty($lesEchantillonsSelect))
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
    <div class = "vst_contenue">
        <?php
        echo '<table class="table">
            <tr>
                <th class="soustable"> numéro Lot </th>
                <th class="soustable"> numéro Échantillon </th>
            </tr>
            ';
            foreach($lesEchantillonsSelect as $leEchantillonSelect)
            {
                echo '
                <tr>
                    <td> ' . $leEchantillonSelect['numLot'] . ' </td>
                    <td> ' . $leEchantillonSelect['numEchant'] . ' </td>
                </tr>';
            }
            echo'</table>';
        ?>
        <br>
        <form id = "valider" method = "POST" action = "index.php?uc=VstRensEch&action=voirSelectFin" style = "font-size:1.5vw;">
            Listes des Échantillons : &nbsp
            <select name="thelistEch" style = "font-size:1vw;">
            <?php
                foreach($lesEchantillonsSelect as $leEchantillonSelect)
                {
                    echo '<option value = "' . $leEchantillonSelect['numEchant'] . '">' . $leEchantillonSelect['numEchant'] . '</option>';
                }
            ?>
            </select>
            <br/>
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