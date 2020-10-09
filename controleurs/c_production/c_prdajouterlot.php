<?php
	if(!isset($_REQUEST['action']))
	{
		$action = "ajouterLot";
	}
	else 
	{
		$action = $_REQUEST['action'];
	}

	switch($action)
	{
		//Affiche le menu pour entrer les données du 
		//nouveau lot

		case "ajouterLot" : 
		{
				$lesMedicaments = getLesMedicaments();
				require "vues/v_production/v_prdAjouterLot.php";
				break;
		}

		//Quand on valide à l'aide du bouton

		case "confirmerLot" :
		{
				//On récupère toutes les données entrées

				$numLot = $_POST['num'];
				$date = $_POST['date'];
				$medicament = $_POST['medicament'];
				$idMedicament = "";
				$nb_Echant = $_POST['nombre'];
				$idUt = $_SESSION['num'] ;

				$lesMedicaments = getLesMedicaments();
				

				if($numLot != "" and $date != "" and $medicament != "" and $nb_Echant !="")
				{
					ajouterLot($numLot, $date, $medicament);
				}

				$compteur = 1;
				while ($compteur <= $nb_Echant)
				{
					ajouterEchantillons($compteur, $numLot, $idUt);
					$compteur++;
				}
				
				$lesLots = getLesLots($numLot);

				require "vues/v_production/v_prdConfirmLot.php" ;
				break ;
			
	
	
		}

	}
?>