<?php
	if(isset($_REQUEST['action']))
	{
		$action = $_REQUEST['action'];
	}
	else
	{
		$action = 'select';
	}

	switch ($action)
	{
		case 'select' :
		{
			$lesMedicaments = listMedicament();
			require 'vues/v_visiteur/v_vstRensEch_select.php';
			break;
		}
		
		case 'voirSelectFin' :
		{
			$_SESSION['idMedicament'] = $_REQUEST['thelistMedic'];
			$lesMedecinsSelectFin = listMedecins();
			require 'vues/v_visiteur/v_vstRensEch_voirSelectFin.php';
			break;
		}

		case 'voirSelect' :
		{
			$_SESSION['idMedecin'] = $_REQUEST['thelistMed'];
			$_SESSION['date'] = $_REQUEST['date'];
			$lesLotSelect = listEchantillonDMNull($_SESSION['idMedicament'], $_SESSION['num']);
			require 'vues/v_visiteur/v_vstRensEch_voirSelect.php';
			break;
		}

		case 'ajout' :
		{

			$lesLotSelect = listEchantillonDMNull($_SESSION['idMedicament'], $_SESSION['num']);

			$cpt=0;

			foreach($lesLotSelect as $leLotSelect)
			{
				if(isset($_REQUEST['numEchant'.$cpt]))
				{
					UpdateEchant($_SESSION['idMedecin'], $_SESSION['date'], $leLotSelect['numLot'], $leLotSelect['numEchant']);
				}

				$cpt++;
			}
			require 'vues/v_visiteur/v_vstRensEch_ajout.php';
			break;
		}
	}
?>