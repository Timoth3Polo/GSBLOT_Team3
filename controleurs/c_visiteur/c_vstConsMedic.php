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
			require 'vues/v_visiteur/v_vstConsMedic_select.php';
			break;
		}
		
		case 'voirSelect' :
		{
			$idMedic = $_POST['thelist'];
			$lesMedicamentsSelect = listPRMedic($idMedic);
			require 'vues/v_visiteur/v_vstConsMedic_voirSelect.php';
			break;
		}
	}
?>