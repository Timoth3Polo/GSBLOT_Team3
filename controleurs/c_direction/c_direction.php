<?php
	if(!isset($_REQUEST['uc']))
	{
		$UC = 'dir_ajoutMedoc';
	}
	else
	{
		$UC = $_REQUEST['uc'];
	}

	switch($UC)
	{
		case 'dir_ajoutMedoc':
		{
			require 'controleurs/c_direction/c_dir_ajoutMedoc.php';
			break;
		}

		case 'dir_affiMedVisit':
		{
			require 'controleurs/c_direction/c_dir_affiMedVisit.php';
			break;
		}

		case 'dir_nbEnchantillon':
		{
			require 'controleurs/c_direction/c_dir_nbEchantillon.php';
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