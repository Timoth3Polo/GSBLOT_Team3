<?php
if (!isset($_REQUEST['action'])) {
    $action = "SelectEchant" ;
}
else {
    $action = $_REQUEST['action'] ;
}

switch ($action)
{  
        case "SelectEchant" : 
        {
                require "vues/v_direction/v_dir_SelectEchant.php";
                break;
        }

        case "nbEnchant" :
        {
            $nb = $_REQUEST['Genre'];

            if ($nb == "NbEchantStock")
            {
                $LesEchantillonStock = listEchantillonStock();
                require "vues/v_direction/v_dir_NbEchantStock.php";
            }
            else
            {
                if ($nb == "nbEchantSortis") 
                {
                    $LesEchantillonSortis = listEchantillonSortis();
                    require "vues/v_direction/v_dir_nbEchantSortis.php";
                }
                else
                {
                    if ($nb == "nbEchantLaisser") 
                    {
                        $LesEchantillonLaisses = listEchantillonLaisses();
                        require "vues/v_direction/v_dir_nbEchantLaisser.php";

                    }
                }
            }
            break;
        }
}