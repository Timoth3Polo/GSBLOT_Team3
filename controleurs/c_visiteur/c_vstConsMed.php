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
			$lesMedecins = listMedecins();
			require 'vues/v_visiteur/v_vstConsMed_select.php';
			break;
		}
		
		case 'voirSelect' :
		{
			$idMed = $_POST['thelist'];
			$lesMedecinsSelect = listPRMed($idMed);
			require 'vues/v_visiteur/v_vstConsMed_voirSelect.php';
			break;
		}
	}
?>