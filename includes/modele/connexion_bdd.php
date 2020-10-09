<?php
	$PARAM_hote = 'localhost';
	$PARAM_port = '';
	$PARAM_nom_bdd = 'gsblot_team3';
	$PARAM_utilisateur = 'root';
	$PARAM_mdp = '';

	try
	{
		$bdd = new PDO('mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bdd,$PARAM_utilisateur,$PARAM_mdp);
		$bdd-> exec('SET CHARACTER SET utf8');
	}
	catch(Exception $e0)
	{
		echo 'ERREUR DE LA CONNEXION';
	}
?>