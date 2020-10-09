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
			$lesDates = listDateNonNull();
			require 'vues/v_visiteur/v_vstConsDate_select.php';
			break;
		}
		
		case 'voirSelect' :
		{
			$idDate = $_POST['thelist'];
			$lesDatesSelect = listPRDate($idDate);
			require 'vues/v_visiteur/v_vstConsDate_voirSelect.php';
			break;
		}
	}
?>