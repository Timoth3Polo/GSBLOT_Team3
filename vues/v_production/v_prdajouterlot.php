<div class="production">
	<div class="prd_titre">
		Ajouter un lot
	</div>

	<div clas="prd_contenu">
		<br>
		<center>
		<form action="index.php?uc=prdAjouterLot&action=confirmerLot" method="post">

		N° lot : <input type="int" name="num"/><br/>
		<br>
		Date : <input type="date" name="date" /><br/>
		<br>
		Médicament : 
		<select name="medicament">
	    <?php
	    foreach ($lesMedicaments as $leMedicament) {
	        echo '<option value="' . $leMedicament['idMedoc'] . '">' . $leMedicament['libMedoc'] . '</option>';
	    }
	    ?>
	    </select><br/>
	    <br>
		Nombre d'échantillons : <input type="text" name="nombre" /><br/>
		<br>
		<input type="submit" name="valider" value="Valider" class="bt_valider"/>
		</form>
	</center>

	</div>
</div>
