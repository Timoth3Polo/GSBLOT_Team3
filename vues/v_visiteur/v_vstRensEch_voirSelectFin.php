<div class = "vstAjouter_case">
    <div class = "vst_titre">
        Renseignement d'Échantillon
    </div>
    <div class = "vst_contenue">
        <form id = "connexion" method = "POST" action = "index.php?uc=VstRensEch&action=voirSelect" style = "font-size:1.5vw;">
            Médecins : &nbsp
            <select name="thelistMed" style = "font-size:1vw;">
            <?php
                foreach($lesMedecinsSelectFin as $leMedecinsSelectFin)
                {
                    echo '<option value = "' . $leMedecinsSelectFin['matriculeMedecin'] . '">' . $leMedecinsSelectFin['nomMedecin'] . " " . $leMedecinsSelectFin['prenomMedecin'] . '</option>';
                }
            ?>
            </select>
            <br/>
            <br/>
            Date : &nbsp
            <input id = "date" name = "date" type = "date" style = "font-size:1vw;" required="required">
            <br/>
            <br/>
            <center>
                <button type = "submit" class = "bt_valider" style = "font-size : 0.8vw;"> VALIDER </button>
            </center>
        </form>
    </div>
</div>