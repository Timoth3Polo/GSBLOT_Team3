<?php
	if(!isset($_REQUEST['uc']))
	{
		$UC = 'VstRensEch';
	}
	else
	{
		$UC = $_REQUEST['uc'];
	}

	switch($UC)
	{
		case 'VstRensEch' : 
		{
			require 'controleurs/c_visiteur/c_vstRensEch.php'; 
			break;
		}

		case 'VstConsMedic' :
		{
			require 'controleurs/c_visiteur/c_vstConsMedic.php';
			break;
		}

		case 'VstConsMed' :
		{
			require 'controleurs/c_visiteur/c_vstConsMed.php';
			break;
		}

		case 'VstConsDate' :
		{
			require 'controleurs/c_visiteur/c_vstConsDate.php';
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