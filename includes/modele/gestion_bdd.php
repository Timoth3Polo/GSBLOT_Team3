<?php
function verifierIdentification($loginSaisi, $mdpSaisi)
{
	require "connexion_bdd.php";
	$sql = "
	select * 
	from gsb_utilisateur
	";
	$exec = $bdd->query($sql);
	$trouver = false;
	$fin = false;

	while(!$trouver && !$fin)
	{
		if($ligne = $exec->fetch())
		{
			if($ligne['loginUt'] == $loginSaisi && $ligne['mdpUt'] == $mdpSaisi)
			{
				$trouver = true;
				$_SESSION['identif'] = $ligne['loginUt'];
				$_SESSION['mdp'] = $ligne['mdpUt'];
				$_SESSION['nom'] = $ligne['nomUt'].' '.$ligne['prenomUt'];
				$_SESSION['num'] = $ligne['numUt'];
				$_SESSION['statut'] = $ligne['statutUt'];
			}
		}
		else
		{
			$fin = true;
		}
	}
	return $trouver;
}
/*********************/
/*                   */
/*    DIRECTION      */
/*                   */
/*********************/

/*******************************/
/* Donne la liste des visiteurs*/
/*******************************/

function listVisiteur()
{
    require "connexion_bdd.php";
    $sql = "
    select *
    from gsb_utilisateur
    where statutUt = 'visiteur';
    ";
    $exec=$bdd->prepare($sql) ;
    $exec->execute() ;
    $curseur=$exec->fetchAll();
    return $curseur;
}

function ajoutMedoc($libMedoc) {
    require "connexion_bdd.php" ;
    $sql = "insert into gsb_medicament (libMedoc) values ('$libMedoc')" ;
    $exec=$bdd->prepare($sql) ;
    $resultat = $exec->execute() ;
    return $resultat;
}

function verifMedocExist($libMedoc){
	require "connexion_bdd.php";
	$sql = "select count(*) as nb from gsb_medicament where libMedoc = '$libMedoc'" ;
    $exec=$bdd->prepare($sql) ;
    $exec->execute() ;
    $curseur=$exec->fetch();
    $nb = $curseur['nb'];
    if($nb > 0)
    {
    	return true;
    }
    else
    {
    	return false;
    }
}

/***********************************************************/
/* Donne la liste des médecin visité par un visiteur donnés*/
/***********************************************************/

function listMedecinVisite($id)
{
	require "connexion_bdd.php";
	$sql = "
	select nomMedecin, prenomMedecin, count(*) as nb_echantillon
	from gsb_echantillon
	inner join gsb_medecin on matMedecin = matriculeMedecin
	where numeroUt = '$id'
	group by nomMedecin, prenomMedecin";
    $exec=$bdd->prepare($sql) ;
    $exec->execute() ;
    $curseur=$exec->fetchAll();
    return $curseur;
}

/******************************************************************/
/* Donne la liste des échantillon par médicament qui sont en stock*/
/******************************************************************/

function listEchantillonStock()
{
	require "connexion_bdd.php";
	$sql = "select count(*) as nb_Echant, libMedoc
	from gsb_echantillon
	inner join gsb_lot on numeroLot = numLot
	inner join gsb_medicament on idMedoc = idMedicament
	where dateSortie is null
	and dateVisite is null
	and matMedecin is null
	group by libMedoc";
	$exec=$bdd->prepare($sql) ;
    $exec->execute() ;
    $curseur=$exec->fetchAll();
    return $curseur;
}

/******************************************************************/
/* Donne la liste des échantillon par médicament qui sont sortis  */
/******************************************************************/

function listEchantillonSortis()
{
	require "connexion_bdd.php";
	$sql = "select count(*) as nb_Echant, libMedoc
	from gsb_echantillon
	inner join gsb_lot on numeroLot = numLot
	inner join gsb_medicament on idMedoc = idMedicament
	where dateSortie is NOT null
	and dateVisite is null
	and matMedecin is null
	GROUP by libMedoc";
	$exec=$bdd->prepare($sql) ;
    $exec->execute() ;
    $curseur=$exec->fetchAll();
    return $curseur;
}

/*********************************************************************************/
/* Donne la liste des échantillon par médicament qui ont été laissés a un médecin*/
/*********************************************************************************/

function listEchantillonLaisses()
{
	require "connexion_bdd.php";
	$sql = "select count(*) as nb_Echant, libMedoc
	from gsb_echantillon
	inner join gsb_lot on numeroLot = numLot
	inner join gsb_medicament on idMedoc = idMedicament
	where dateSortie is null
	and dateVisite is not null
	and matMedecin is not null
	group by libMedoc";
	$exec=$bdd->prepare($sql) ;
    $exec->execute() ;
    $curseur=$exec->fetchAll();
    return $curseur;	
}

/********************************************************************************************************/

/*********************/
/*                   */
/* Visiteur Médicale */
/*                   */
/*********************/

/******************************/
/* Donne la liste des médecins*/
/******************************/

function listMedecins()
{
	require "connexion_bdd.php";
	$sql = "
	select *
	from gsb_medecin;
	";
    $exec=$bdd->prepare($sql) ;
    $exec->execute() ;
    $curseur=$exec->fetchAll();
    return $curseur;
}

/********************************/
/* Donne la liste des médicament*/
/********************************/

function listMedicament()
{
	require "connexion_bdd.php";
	$sql = "
	select *
	from gsb_medicament";
	$exec=$bdd->prepare($sql) ;
    $exec->execute() ;
    $curseur=$exec->fetchAll();
    return $curseur;
}

/******************************/
/* Donne la liste des dates   */
/******************************/

function listDateNonNull()
{
	require "connexion_bdd.php";
	$sql = "
	select dateVisite
	from gsb_echantillon
	where dateVisite is NOT NULL;
	";
    $exec=$bdd->prepare($sql) ;
    $exec->execute() ;
    $curseur=$exec->fetchAll();
    return $curseur;
}

function listDateNull()
{
	require "connexion_bdd.php";
	$sql = "
	select dateVisite
	from gsb_echantillon
	where dateVisite is NULL;
	";
    $exec=$bdd->prepare($sql) ;
    $exec->execute() ;
    $curseur=$exec->fetchAll();
    return $curseur;
}


/******************************/
/* Donne la liste des Ech     */
/******************************/

function listEchantillonDMNull($idMedicament, $idUtilisateur)
{
	require "connexion_bdd.php";
	$sql = "
	select *
	from gsb_echantillon
	inner join gsb_lot
	on numeroLot = numLot
	where dateVisite is NULL
	and matMedecin is NULL
	and dateSortie is not NULL
	and numeroUt = " . $idUtilisateur ."
	and idMedicament = " . $idMedicament . ";";
	$exec=$bdd->prepare($sql);
    $exec->execute();
    $curseur=$exec->fetchAll();
    return $curseur;
}

/*********************************************/
/* Donne une liste par rapport à une date    */
/*********************************************/

function listPRDate($date)
{
	require "connexion_bdd.php";
	$sql = "
		select *
		from gsb_echantillon
		inner join gsb_medecin
		on matMedecin = matriculeMedecin
		inner join gsb_lot
		on numeroLot = numLot
		inner join gsb_medicament
		on idMedicament = idMedoc
		where dateVisite = '" . $date . "';";
	$exec=$bdd->prepare($sql);
    $exec->execute() ;
    $curseur=$exec->fetchAll();
    return $curseur;
}

/*********************************************/
/* Donne une liste par rapport à une médecin */
/*********************************************/

function listPRMed($numMed)
{
	require "connexion_bdd.php";
	$sql = "
		select *
		from gsb_echantillon
		inner join gsb_medecin
		on matMedecin = matriculeMedecin
		inner join gsb_lot
		on numeroLot = numLot
		inner join gsb_medicament
		on idMedicament = idMedoc
		where matriculeMedecin = " . $numMed . ";";
	$exec=$bdd->prepare($sql);
    $exec->execute() ;
    $curseur=$exec->fetchAll();
    return $curseur;
}

/*********************************************/
/* Donne une liste par rapport à une médecin */
/*********************************************/

function listPRMedic($numMedic)
{
	require "connexion_bdd.php";
	$sql = "
		select *
		from gsb_echantillon
		inner join gsb_medecin
		on matMedecin = matriculeMedecin
		inner join gsb_lot
		on numeroLot = numLot
		inner join gsb_medicament
		on idMedicament = idMedoc
		where idMedoc = " . $numMedic . ";";
	$exec=$bdd->prepare($sql);
    $exec->execute() ;
    $curseur=$exec->fetchAll();
    return $curseur;
}

/****************************************************************/
/* Ajout d'un medecin et d'une date visite à un lot/echantillon */
/****************************************************************/

function UpdateEchant($idMedecin, $dateVisite, $idLot, $idEchant)
{
	require "connexion_bdd.php";
	$sql = "
		update gsb_echantillon
		set dateVisite = '" . $dateVisite . "',
		matMedecin = " . $idMedecin . "
		where numerolot = " .  $idLot . "
		and numEchant = " .  $idEchant . ";
		";
	$exec=$bdd->query($sql);
}

/**********************************************************************************************************/

/*********************/
/*                   */
/*    PRODUCTION     */
/*                   */
/*********************/

//Permet d'extraire le médicament qui corespond à l'id
function getLeMedoc($id) {
    require "connexion_bdd.php" ;
    $sql = "select * "
            . "from gsb_medicament "
            . "where idMedoc = $id";
    $exec=$bdd->prepare($sql) ;
    $exec->execute() ;
    $ligne=$exec->fetch();
    return $ligne;
}


//Permet d'extraire la date qui corespond à l'id
function getLaDate($id) {
    require "connexion_bdd.php" ;
    $sql = "select * "
            . "from gsb_lot "
            . "where numLot = $id";
    $exec=$bdd->prepare($sql) ;
    $exec->execute() ;
    $ligne=$exec->fetch();
    return $ligne;
}


//Affiche les lots en fonction du médicament choisi
//Affiche le numéro du lot, la date de fabrication
//et le nombre d'échantillons
function getLesLotsMedoc($id) {
    require "connexion_bdd.php" ;
    $sql = "select numLot, dateFabrication, count(*) as nb_Echant  "
            . "from gsb_lot "
            . "inner join gsb_medicament on idMedicament = idMedoc "
            . "inner join gsb_echantillon on numeroLot = numLot "
            . "where idMedicament = $id "
            . "group by numLot, dateFabrication" ;
    $exec=$bdd->prepare($sql) ;
    $exec->execute() ;
    $ligne=$exec->fetchAll();
    return $ligne;
}


//Affiche les lots en fonction de la date choisie
//Affiche le numéro du lot, le nom du médecin
//et le nombre d'échantillons
function getLesLotsDate($date) {
    require "connexion_bdd.php" ;
    $sql = "select numLot, count(*) as nb_Echant "
            . "from gsb_lot "
            . "inner join gsb_medicament on idMedicament = idMedoc "
            . "inner join gsb_echantillon on numeroLot = numLot "
            . "where dateFabrication = '$date' "
            . "group by numLot, libMedoc "
            . "having nb_Echant > 0" ;
    $exec=$bdd->prepare($sql) ;
    $exec->execute() ;
    $ligne=$exec->fetchAll();
    return $ligne;
}


//Permet de récupérer la liste de tous les médicaments
function getLesMedicaments() {
    require "connexion_bdd.php" ;
    $sql = "select * "
            . "from gsb_medicament "
            . "order by libMedoc" ;
    $exec=$bdd->prepare($sql) ;
    $exec->execute() ;
    $ligne=$exec->fetchAll();
    return $ligne;
}


//Permet de récupérer la liste de toutes les dates
function getLesDates() {
    require "connexion_bdd.php" ;
    $sql = "select distinct(dateFabrication) "
            . "from gsb_lot "
            . "inner join gsb_echantillon on numLot = numeroLot "
            . "where numLot = numeroLot "
            . "group by dateFabrication "
            . "having count(*) > 0 "
            . "order by dateFabrication" ;
    $exec=$bdd->prepare($sql) ;
    $exec->execute() ;
    $ligne=$exec->fetchAll();
    return $ligne;
}

//Permet de récupérer la liste des lots pour pouvoir vérifier
//Si celui qu'on à ajouté est bien enregistré 
function getLesLots($numLot) {
    require "connexion_bdd.php" ;
    $sql = "select numLot, dateFabrication, idMedoc, count(*) as nb_Echant "
            . "from gsb_lot "
            . "inner join gsb_medicament on idMedicament = idMedoc "
            . "inner join gsb_echantillon on numeroLot = numLot "
            . "where numLot = $numLot "
            . "order by numLot" ;
    $exec=$bdd->prepare($sql) ;
    $exec->execute() ;
    $ligne=$exec->fetchAll();
    return $ligne;
}


//--> ajouterLot et ajouterEchantillons fonctionnent ensemble
//-->Les 2 sont nécessaires à l'ajout d'un nouveau lot
//Ajouter un nouveau lot
function ajouterLot($numLot, $date, $idMedicament) {
    require "connexion_bdd.php" ;
    $sql = "insert into gsb_lot "
            . "values($numLot, '$date', $idMedicament)";
    $exec=$bdd->prepare($sql) ;
    $exec->execute() ;
}

//Ajouter les échantillons corespondant au lot créé
function ajouterEchantillons($compteur, $numLot) {
    require "connexion_bdd.php" ;
    $sql = "insert into gsb_echantillon (numEchant, numeroLot) "
            . "values($compteur, $numLot)";
    $exec=$bdd->prepare($sql) ;
    $exec->execute() ;
}

/**********************************************************************************************************/

/*********************/
/*                   */
/*    MAGASIN        */
/*                   */
/*********************/

function getEchantillonStock($numEchant) /* affiche les echantillons en stock par numero*/
{

	require"connexion_bdd.php" ;
	$sql = "select numEchant from gsb_echantillon where dateSortie is null" ; 
	$exec = $bdd->query($sql) ; 
	$exec->execute() ;
	$curseur=$exec->fetchAll() ; 
	return $curseur ;
}

function getEchantillonSorti($dateSortie)/* affiche les echantillons sortis par numero*/
{

	require"connexion_bdd.php" ;
	$sql = "select numLot, libMedoc, dateSortie, matriculeMedecin, nomMedecin, prenomMedecin
			from gsb_echantillon
			inner join gsb_medecin on gsb_medecin.matriculeMedecin = gsb_echantillon.matMedecin
			inner join gsb_lot on gsb_lot.numLot = gsb_echantillon.numeroLot
			inner join gsb_medicament on gsb_medicament.idMedoc = gsb_lot.idMedicament
			where dateSortie is not null" ; 
	$exec = $bdd->query($sql) ; 
	$exec->execute() ;
	$curseur=$exec->fetchAll() ; 
	return $curseur ;
}

function dateVisiteur() /* affiche le matricule, le nom et le prenom auquel un echantillon a été attribué à tel date *//*affiche tout sa mzere*/
{

	require"connexion_bdd.php" ;
	$sql = "select dateSortie, loginUt, nomMedecin, prenomMedecin, matriculeMedecin, numlot
			from gsb_medecin
			inner JOIN gsb_echantillon on gsb_echantillon.matMedecin = gsb_medecin.matriculeMedecin
			inner join gsb_lot on gsb_lot.numLot = gsb_echantillon.numeroLot
			inner join gsb_utilisateur on gsb_utilisateur.numUt = gsb_echantillon.numeroUt";


	$exec = $bdd->prepare($sql) ; 
	$exec->execute() ;
	$curseur=$exec->fetchAll() ; 
	return $curseur ;
}


function lesVisiteurs()
{
	require"connexion_bdd.php" ;

	$sql = "select nomUt, prenomUt
			from gsb_utilisateur
			where statutUt = 'visiteur'";
	$exec = $bdd->prepare($sql) ; 
	$exec->execute() ;
	$curseur=$exec->fetchAll() ; 
	return $curseur ;
}

function modifDate($date) /* affiche le matricule, le nom et le prenom auquel un echantillon a été attribué à tel date */
{

	require"connexion_bdd.php" ;
	$sql = "update gsb_echantillon "
			. "set dateVisite = '$date' "
			. "where numeroLot = " ;
	$exec = $bdd->prepare($sql) ; 
	$exec->execute() ;
	$curseur=$exec->fetchAll() ; 
	return $curseur ;
}


function ajouterDateSortie($lot, $date){
	require"connexion_bdd.php" ;
	$sql = "update gsb_echantillon "
			. "set dateSortie = '$date' "
			. "where numeroLot = $lot" ;
	$exec = $bdd->prepare($sql) ; 
	$exec->execute() ;
}

function numLot(){
	require"connexion_bdd.php";
	$sql =  "select numLot
			from gsb_lot";
	$exec = $bdd->prepare($sql) ; 
	$exec->execute() ;
	$curseur=$exec->fetchAll() ; 
	return $curseur ;
}

function afficherEchantillon($lot)
{
	require"connexion_bdd.php";
	$sql =  "select numLot, dateSortie, loginUt, matMedecin, nomMedecin, prenomMedecin "
			. "from gsb_lot "
			. "inner join gsb_echantillon on numLot = numeroLot "
			. "inner join gsb_utilisateur on numeroUt = numUt "
			. "inner join gsb_medecin on matriculeMedecin = matMedecin "
			. "where numLot = $lot"
			."and statutUt = 'visiteur'";
	$exec = $bdd->prepare($sql) ; 
	$exec->execute() ;
	$curseur=$exec->fetchAll() ; 
	return $curseur ;
}

?>