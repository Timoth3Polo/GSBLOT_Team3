<div class="direction">
	<div class = "dir_titre">
		Afficher le nombre d'échantillon par médicament
	</div>
	<div class = "dir_contenue">
		<form action="index.php?uc=dir_nbEnchantillon&action=nbEnchant" method="POST" name="formulaire2">
		<input type="radio" name="Genre" value="NbEchantStock"> nombre d'échantillons en stock <br>
		<input type="radio" name="Genre" value="nbEchantSortis"> nombre d'échantillons sortis du magasin<br>
		<input type="radio" name="Genre" value="nbEchantLaisser"> nombre d'échantillons laissés aux médecins<br>
		<br>
		<center>
			<input type="submit" value="Envoyer" class = "bt_valider">
		</center>
</form>
	</div>
</div>