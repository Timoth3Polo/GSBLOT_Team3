<!--Contrôleur pour gérer la partie production-->

<?php
	if(!isset($_REQUEST['uc']))
	{
		$UC = 'prdConsMed';
	}
	else
	{
		$UC = $_REQUEST['uc'];
	}

	switch($UC)
	{
		case 'prdConsMed' : 
		{
			//Redirige vers le contrôleur pour la consultation
			//des lots en fonction du médicament choisi
			require 'controleurs/c_production/c_prdConsMed.php'; 
			break;
		}

		case 'prdConsDate' : 
		{
			//Redirige vers le contrôleur pour la consultation
			//des lots en fonction de la date choisie
			require 'controleurs/c_production/c_prdConsDate.php'; 
			break;
		}

		case 'prdAjouterLot' : 
		{
			//Redirige vers le contrôleur pour ajouter un
			//nouveau lot
			require 'controleurs/c_production/c_prdAjouterLot.php'; 
			break;
		}

		case 'deconnexion' :
		{
			session_destroy();
			header("Location:index.php");
			break;
		}
	}
?>