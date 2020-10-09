<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>PPE-GSB</title>
        <script type="text/javascript" src="includes/js/fonctions.js"></script>
    </head>
    <body>
		<?php
			if(isset($_SESSION['statut']))
			{
				echo '<div class = "menu">';

					if($_SESSION['statut'] == 'production')
					{
						echo 
						'
						<div class = "fin"><img src = "image/logoGSB.png" style = "height:90%; width:90%;"></div>
						<div class = "menu1"><a href="index.php?uc=prdConsMed"><b>Consulter les lots par médicament</b></a></div>
						<div class = "menu2"><a href="index.php?uc=prdConsDate"><b>Consulter les lots par date</b></a></div>
						<div class = "menu3"><a href="index.php?uc=prdAjouterLot"><b>Ajouter un lot</b></a></div>
						<div class = "fin"><a href="index.php?uc=deconnexion"><b>Déconnexion</b></a></div>
						';
					}

					else if($_SESSION['statut'] == 'magasin')
					{
						echo 
						'
						<div class = "fin"><img src = "image/logoGSB.png" style = "height:90%; width:90%;"></div>
						<div class = "menu1"><a href="index.php?uc=MagAfficher"><b>Afficher les echantillons en stock ou sortis</b></a></div>
						<div class = "menu2"><a href="index.php?uc=MagConsult"><b>Renseigner une sortie d\'un echantillon</b></a></div>
						<div class = "fin"><a href="index.php?uc=deconnexion"><b>Déconnexion</b></a></div>
						';
					}

					else if($_SESSION['statut'] == 'visiteur')
					{
						echo 
						'
						<div class = "fin"><img src = "image/logoGSB.png" style = "height:90%; width:90%;"></div>
						<div class = "menu1"><a href="index.php?uc=VstRensEch"><b>Renseignement échantillon</b></a></div>
						<div class = "menu2"><a href="index.php?uc=VstConsMedic"><b>Informations par rapport aux médicaments</b></a></div>
						<div class = "menu3"><a href="index.php?uc=VstConsMed"><b>Informations par rapport aux médecins</b></a></div>
						<div class = "menu4"><a href="index.php?uc=VstConsDate"><b>Informations par rapport aux dates</b></a></div>
						<div class = "fin"><a href="index.php?uc=deconnexion"><b>Déconnexion</b></a></div>
						';
					}

					else if($_SESSION['statut'] == 'direction')
					{
						echo 
						'
						<div class = "fin"><img src = "image/logoGSB.png" style = "height:90%; width:90%;"></div>
						<div class = "menu1"><a href="index.php?uc=dir_ajoutMedoc"><b>Ajout de médicament</b></a></div>
						<div class = "menu2"><a href="index.php?uc=dir_affiMedVisit"><b>Afficher médecins visités</b></a></div>
						<div class = "menu3"><a href="index.php?uc=dir_nbEnchantillon"><b>Nombre échantillon</b></a></div>
						<div class = "fin"><a href="index.php?uc=deconnexion"><b>Déconnexion</b></a></div>
						';
					}

				echo '</div>';
			}
		?>