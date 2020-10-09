<div class = "vstAjouter_case">
	<div class = "vst_titre">
		Consultation par rapport aux Médecins
	</div>
	<div class = "vst_contenue">
		<form id = "connexion" method = "POST" action = "index.php?uc=VstConsMed&action=voirSelect" style = "font-size:1.5vw;">
			Médecins : &nbsp
			<select name="thelist" style = "font-size:1vw;">
			<?php
				foreach($lesMedecins as $leMedecin)
				{
					echo '<option value = "' . $leMedecin['matriculeMedecin'] . '">' . $leMedecin['nomMedecin'] . ' ' . $leMedecin['prenomMedecin'] . '</option>';
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