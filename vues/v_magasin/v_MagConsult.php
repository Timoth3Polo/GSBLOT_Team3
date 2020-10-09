<div class="magasin">
	<div class="mag_titre">
		Sortie d'un échantillon
	</div>
	<div class="mag_contenue">
		<form action="index.php?uc=MagConsult&action=afficher" method="post">
		Renseigner la date de visite : <input type="date" name="date" required="required" />
			<br>
	            <label>Liste des visiteurs : </label>

	            <select id="cbVisiteur" name="visiteur">
	            	<?php 
	            		foreach($laConsult as $consult)
	            		{
	            			echo '<option value="' . $consult['numUt'] . '">' . $consult['nomUt'] . " " . $consult['prenomUt'] . '</option>';
	            		}
	            	 ?>
	          	</select> 
	          	<br>

	          	<!-- Sélection du numéro de lot -->
	          	Renseigner le numéro de lot : <select id="cbLot" name="lot">
	            	<?php 
	            		foreach($Leslots as $lot)
	            		{
	            			echo '<option value="' . $lot['numLot'] . '">' . $lot['numLot'] .  '</option>';
	            		}
	            	 ?>
	          	</select>  
	          	<br>
	          	<br>
	          	<center><input type="submit" name="valider"></center>
		</form>
	</div>
</div>