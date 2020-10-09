<?php
    if(empty($lesMedecinsSelect))
    {
        echo '
        <div class = "vstAjouter_case">
            <div class = "vst_titre">
            Pas d\'information dans la table
            </div>
            <div class = "vst_contenue">
            Il n\'y a pas de donnée dans ce que vous avez selectionné.
            <form id = "retour" method = "POST" action = "index.php?uc=VstConsMed&action=select" style = "font-size:1.5vw; margin-top: 1vw;">
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
		Consultation par rapport aux Médecins
	</div>
	<div class = "vst_contenue">
		<?php
		echo '<table class="table">
            <tr>
                <th class="soustable"> Médicament </th>
                <th class="soustable"> Date </th>
                <th class="soustable"> numéro Lot </th>
                <th class="soustable"> numéro Échantillon </th>
            </tr>
            ';
            foreach($lesMedecinsSelect as $leMedecinSelect)
            {
            	echo '
                <tr>
            		<td> ' . $leMedecinSelect['libMedoc'] . ' </td>
                	<td> ' . $leMedecinSelect['dateVisite'] . ' </td>
                	<td> ' . $leMedecinSelect['numLot'] . ' </td>
                	<td> ' . $leMedecinSelect['numEchant'] . ' </td>
                </tr>';
            }
            echo'</table>';
		?>
        <form id = "retour" method = "POST" action = "index.php?uc=VstConsMed&action=select" style = "font-size:1.5vw; margin-top: 1vw;">
        <center>
            <button type = "submit" class = "bt_valider" style = "font-size : 0.8vw;"> RETOUR </button>
        </center>
        </form>
	</div>
</div>
<?php
    }
?>