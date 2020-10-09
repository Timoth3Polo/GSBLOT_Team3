<div class = "vstAjouter_case">
	<div class = "vst_titre">
		Consultation par rapport à la date de visite
	</div>
	<div class = "vst_contenue">
		<form id = "valider" method = "POST" action = "index.php?uc=VstConsDate&action=voirSelect" style = "font-size:1.5vw;">
			Date des Visites : &nbsp
			<select name="thelist" style = "font-size:1vw;">
			<?php
				foreach($lesDates as $laDate)
				{
					echo '<option>' . $laDate['dateVisite'] . '</option>';
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