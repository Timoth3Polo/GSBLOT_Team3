<?php
	if(!isset($_REQUEST['action']))
	{
		$action = "selectMed";
	}
	else 
	{
		$action = $_REQUEST['action'];
	}

	//Affiche la première vue pour sélectionner un médicament
	//Quand un médicament est sélectionné on affiche le résultat 
	//de la requête
	
	switch($action)
	{
		case "selectMed" : 
		{
				$lesMedicaments = getLesMedicaments();
				require "vues/v_production/v_prdSelectMed.php";
				break;
		}

		case "affichMed" : 
		{
				$id=$_REQUEST['id'];
				$leMedicament = getLeMedoc($id);
				$lesLotsMedoc = getLesLotsMedoc($id);
				require "vues/v_production/v_prdLotParMed.php";
				break;
		}
			
	
	}
?>