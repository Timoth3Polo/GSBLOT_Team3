<div class="magasin">
	<div class ="mag_titre">
		Liste des Echantillons
	</div>

		<div class="mag_contenue">
			<center>
				<table class = "table">
					<?php
						if($choix == 1)
						{
							echo '<tr>'
								.'<th>N° Echantillon </th>'
								.'</tr>' ; 
						}
						else
						{
							echo '<tr>'
								.'<th>N° Lot </th>'
								.'<th> Médicament </th>'
								.'<th> Matricule </th>'
								.'<th> Nom </th>'
								.'<th> Prénom </th>'
								.'</tr>' ; 
						}
					?>
				<?php
				foreach($lesEchantStock as $lechant){
					if ($choix == 1)
					{
						echo '<tr>'
					. '<td>'. $lechant['numEchant']. '</td>' 
					.'</tr>' ;
					}
					else
					{
						echo '<tr>'
					. '<td>'. $lechant['numLot']. '</td>' 
					. '<td>'. $lechant['libMedoc']. '</td>' 
					. '<td>'. $lechant['matriculeMedecin']. '</td>' 
					. '<td>'. $lechant['nomMedecin']. '</td>' 
					. '<td>'. $lechant['prenomMedecin']. '</td>' 
					.'</tr>' ;
					}
				}
				?>				
			</table>
				<form id = "retour" method = "POST" action = "index.php?uc=MagAfficher" style = "font-size:1.5vw; margin-top: 1vw;">
		        <center>
		            <button type = "submit" class = "bt_valider" style = "font-size : 0.8vw;"> RETOUR </button>
		        </center>
		        </form>
			</center>
		</div>	
</div>

