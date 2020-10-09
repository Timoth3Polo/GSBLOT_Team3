<?php
	if(!isset($_REQUEST['action']))
	{
		$action = "selectDate";
	}
	else 
	{
		$action = $_REQUEST['action'];
	}

	//Affiche la première vue pour sélectionner une date
	//Quand une date est sélectionnée on affiche le résultat 
	//de la requête

	switch($action)
	{

		case "selectDate" : 
		{
				$lesDates = getLesDates();
				require "vues/v_production/v_prdSelectDate.php";
				break;
		}

		case "affichDate" : 
		{
				$date=$_REQUEST['date'];
				$lesLotsDate = getLesLotsDate($date);
				require "vues/v_production/v_prdLotParDate.php";
				break;
		}
	}
?>