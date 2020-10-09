<?php
	if(!isset($_REQUEST['action']))
	{
		$action = 'afficher';
	}
	else
	{
		$action = $_REQUEST['action'];
	}

	switch ($action)
	{
		case 'afficher' :
		{
			require 'vues/v_magasin/v_magEchantChoix.php';
			break;
		}
		
		case 'ajouter' :
		{
			$choix = $_REQUEST['choix'] ;
			if($choix == 1 )
			{
				$lesEchantStock = getEchantillonStock($choix) ; 
			}
			else
			{
				$lesEchantStock = getEchantillonSorti($choix) ; 
			}
            require 'vues/v_magasin/v_magListeEchant.php';
			break;
		}
	}
?>