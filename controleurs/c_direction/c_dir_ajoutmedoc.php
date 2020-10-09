<?php
if (!isset($_REQUEST['action'])) {
    $action = "ajouter" ;
}
else {
    $action = $_REQUEST['action'] ;
}

switch ($action)
{  
    case "ajouter" : {         
            require "vues/v_direction/v_dir_medicamentajout.php" ; 
            break ;
        }
    case 'validajouter': {

    	echo '<div class="direction">' ;
            if (($_REQUEST['libMedoc'])!= "")
            {
                if (!verifMedocExist($_REQUEST['libMedoc']))
                {
                	ajoutMedoc($_REQUEST['libMedoc']);

                    echo '<div class="ok">Le médicament ' . $_REQUEST['libMedoc'] . ' a bien été ajouté</div>' ;
                    echo '<div class="okbis"><a href="index.php?uc=dir_ajoutMedoc">Retour</a></div>' ;
                }
                else
                {
                    echo '<div class="erreur">Le médicament ' . $_REQUEST['libMedoc'] . ' existe déjà</div>' ;
                    echo '<div class="erreurbis"><a href="index.php?uc=dir_ajoutMedoc">Retour</a></div>' ;
                }                    
            }
            else 
            { 
                echo '<div class="erreur">Veuillez saisir un médicament</div>' ;
                echo '<div class="erreurbis"><a href="index.php?uc=dir_ajoutMedoc">Retour</a></div>' ;
            }
            break ;
    }
}