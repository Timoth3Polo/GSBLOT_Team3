<?php
	if(!isset($_SESSION['statut']))
	{
		$STATUT = 'verification';
	}
	else
	{
		$STATUT = $_SESSION['statut'];
	}

	switch($STATUT)
	{
		case 'verification' : 
		{
			require 'controleurs/c_authentification.php'; 
			break;
		}

		case 'visiteur' :
		{
			require 'controleurs/c_visiteur/c_visiteur.php';
			break;
		}

		case 'direction' :
		{
			require 'controleurs/c_direction/c_direction.php';
			break;
		}

		case 'magasin' :
		{
			require 'controleurs/c_magasin/c_magasin.php';
			break;
		}

		case 'production' :
		{
			require 'controleurs/c_production/c_production.php';
			break;
		}
	}
?>