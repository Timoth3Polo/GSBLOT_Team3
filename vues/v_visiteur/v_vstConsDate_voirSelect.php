<?php
    if(empty($lesDatesSelect))
    {
        echo '
        <div class = "vstAjouter_case">
            <div class = "vst_titre">
            Pas d\'information dans la table
            </div>
            <div class = "vst_contenue">
            Il n\'y a pas de donnée dans ce que vous avez selectionné.
            <form id = "retour" method = "POST" action = "index.php?uc=VstConsDate&action=select" style = "font-size:1.5vw; margin-top: 1vw;">
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
		Consultation par rapport à une date
	</div>
	<div class = "vst_contenue">
		<?php
		echo '<table class="table">
            <tr>
                <th class="soustable"> Médecin </th>
                <th class="soustable"> Médicaments </th>
                <th class="soustable"> numéro Lot </th>
                <th class="soustable"> numéro Échantillon </th>
            </tr>
            ';
            foreach($lesDatesSelect as $laDateSelect)
            {
            	echo '
                <tr>
            		<td> ' . $laDateSelect['nomMedecin'] . ' ' . $laDateSelect['prenomMedecin'] .  ' </td>
                	<td> ' . $laDateSelect['libMedoc'] . ' </td>
                	<td> ' . $laDateSelect['numLot'] . ' </td>
                	<td> ' . $laDateSelect['numEchant'] . ' </td>
                </tr>';
            }
            echo'</table>';
		?>
        <form id = "retour" method = "POST" action = "index.php?uc=VstConsDate&action=select" style = "font-size:1.5vw; margin-top: 1vw;">
        <center>
            <button type = "submit" class = "bt_valider" style = "font-size : 0.8vw;"> RETOUR </button>
        </center>
        </form>
	</div>
</div>
<?php
    }
?>