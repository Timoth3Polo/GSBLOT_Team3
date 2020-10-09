<div class = "vstAjouter_case">
    <div class = "vst_titre">
        Renseignement d'Échantillon
    </div>
    <div class = "vst_contenue">
        <form id = "connexion" method = "POST" action = "index.php?uc=VstRensEch&action=voirSelectFin" style = "font-size:1.5vw;">
            Médicaments : &nbsp
            <select name="thelistMedic" style = "font-size:1vw;">
            <?php
                foreach($lesMedicaments as $leMedicament)
                {
                    echo '<option value = "' . $leMedicament['idMedoc'] . '">' . $leMedicament['libMedoc'] . '</option>';
                }
            ?>
            </select>
            <br/>
            <br/>
            <center>
                <button type = "submit" class = "bt_valider" style = "font-size : 0.8vw;"> VALIDER </button>
            </center>
        </form>
    </div>
</div>