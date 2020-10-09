<div class="magasin">
	<div class="mag_titre">
		Liste des Echantillons
	</div>

	<div class="mag_contenue">
		<center>
		<table class="table">
			<?php
				echo '<tr>'
						.'<th>N° de lot </th>'
						.'<th>Date de sortie  </th>'
						.'<th> Utilisateur </th>'
						.'<th> Matricule </th>'
						.'<th> nom </th>'
						.'<th> Prénom </th>'
						.'</tr>' ; 
			?>
		<?php
		foreach($lesDetails as $leDetail){
			
				echo '<tr>'
			. '<td>'. $leDetail['numLot'] . '</td>' 
			. '<td>'. $leDetail['dateSortie']. '</td>' 
			. '<td>'. $leDetail['loginUt']. '</td>' 
			. '<td>'. $leDetail['matMedecin']. '</td>' 
			. '<td>'. $leDetail['nomMedecin']. '</td>' 
			. '<td>'. $leDetail['prenomMedecin']. '</td>' 
			.'</tr>' ;
			
		}
		?>
		
		</table>
			<form id = "retour" method = "POST" action = "index.php?uc=MagConsult" style = "font-size:1.5vw; margin-top: 1vw;">
	        <center>
	            <button type = "submit" class = "bt_valider" style = "font-size : 0.8vw;"> RETOUR </button>
	        </center>
		    </form>
		</center>
	</div>