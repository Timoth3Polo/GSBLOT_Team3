<div class = "vstAjouter_case">
	<div class = "vst_titre">
		Consultation par rapport aux Médicaments
	</div>
	<div class = "vst_contenue">
		<form id = "connexion" method = "POST" action = "index.php?uc=VstConsMedic&action=voirSelect" style = "font-size:1.5vw;">
			Médicaments : &nbsp
			<select name="thelist" style = "font-size:1vw;">
			<?php
				foreach($lesMedicaments as $leMedicament)
				{
					echo '<option value = "' . $leMedicament['idMedoc'] . '">' . $leMedicament['libMedoc'] . '</option>';
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