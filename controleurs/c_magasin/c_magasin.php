<?php
	if(!isset($_REQUEST['uc']))
	{
		$UC = 'MagAfficher';
	}
	else
	{
		$UC = $_REQUEST['uc'];
	}

	switch($UC)
	{
		case 'MagAfficher' : 
		{
			require 'controleurs/c_magasin/c_MagAfficher.php'; 
			break;
		}

		case 'MagConsult' :
		{
			require 'controleurs/c_magasin/c_MagConsult.php';
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