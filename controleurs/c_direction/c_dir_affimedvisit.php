<?php
if (!isset($_REQUEST['action'])) {
    $action = "selectVisiteur" ;
}
else {
    $action = $_REQUEST['action'] ;
}

switch ($action)
{  
        case "selectVisiteur" : 
        {
                $lesVisiteurs = listVisiteur();
                require "vues/v_direction/v_dir_SelectVisiteur.php";
                break;
        }

        case "affichMedecinVisit" : 
        {
                $id=$_REQUEST['id'];
                $medecinVisite = listMedecinVisite($id);
                require "vues/v_direction/v_dir_affichMedecinVisit.php";
                break;
        }
}