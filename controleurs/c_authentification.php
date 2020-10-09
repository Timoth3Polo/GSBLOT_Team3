<?php
	if(isset($_REQUEST['action']))
	{
		$action = $_REQUEST['action'];
	}
	else
	{
		$action = 'authent';
	}

	switch ($action)
	{
		case 'verif' :
		{
			$login = $_REQUEST['login'];
			$mdp = md5($_REQUEST['mdp']);
			$final = verifierIdentification($login, $mdp);
			header("Location:index.php");
		}

		case 'authent' : 
		{
			require 'vues/v_authent.php'; 
			break;
		}
	}
?>