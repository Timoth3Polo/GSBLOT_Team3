<?php
	if(!isset($_REQUEST['action']))
	{
		$action = "select";
	}
	else
	{
		$action = $_REQUEST['action'] ;
	}

	switch ($action)
	{
		case 'select' :
		{
			$laConsult = lesVisiteurs() ; 
			$Leslots = numLot();
			require 'vues/v_magasin/v_MagConsult.php';
			break;
		}

		case 'afficher' :
		{
			$lot = $_POST["lot"];
			$date = $_POST['date'];

			ajouterDateSortie($lot, $date);
			$lesDetails = afficherEchantillon($lot);
			require 'vues/v_magasin/v_magConsultAffich.php' ;
			break;
		}
	}
?>