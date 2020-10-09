<div class="production">
    <div class="prd_titre">
        Liste des lots par rapport au médicament
    </div> 
    <br/>

    <center>
        <?php
        $id=$_REQUEST['id'];
        $leMed = getLeMedoc($id);
        echo 'Médicament sélectionné : ' . $leMed['libMedoc']; 
        ?>  
    </center>

    <div class="prd_contenu">      

        <table class="table">   
            <tr>
                <th>N° Lot</th>
                <th>Date Fabrication</th>
                <th>Nombre échantillons</th>
            </tr>

        <?php
            foreach ($lesLotsMedoc as $leLot) 
            {
                echo '<tr>'
                . '<td>' . $leLot['numLot'] . '</td>'
                . '<td>' . $leLot['dateFabrication'] . '</td>'
                . '<td>' . $leLot['nb_Echant'] . '</td>'
                . '</tr>';
            }
        ?>

        </table>
    </div>
            <form id = "retour" method = "POST" action = "index.php?uc=prdConsMed" style = "font-size:1.5vw; margin-top: 1vw;">
            <center>
                <button type = "submit" class = "bt_valider" style = "font-size : 0.8vw;"> RETOUR </button>
            </center>
            </form> 
</div>