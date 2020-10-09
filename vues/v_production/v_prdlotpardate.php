<div class="production">
    <div class="prd_titre">
        Liste des lots par rapport à la date
    </div>
    <br/>
    <center>
        <?php
        $date=$_REQUEST['date'];
        echo 'Date sélectionnée : ' . $date; 
        ?>
    </center>

    <div class="prd_contenu">                 

        <table class = "table">   
            <tr>
                <th>N° Lot</th>
                <!--<th>Nom médecin</th>-->
                <th>Nombre échantillons</th>
            </tr>

        <?php
            foreach ($lesLotsDate as $leLot) 
            {
                echo '<tr>'
                . '<td>' . $leLot['numLot'] . '</td>'
                //. '<td>' . $leLot['nomMedecin'] . '</td>'
                . '<td>' . $leLot['nb_Echant'] . '</td>'
                . '</tr>';
            }
        ?>
        </table>
        <form id = "retour" method = "POST" action = "index.php?uc=prdConsDate" style = "font-size:1.5vw; margin-top: 1vw;">
            <center>
                <button type = "submit" class = "bt_valider" style = "font-size : 0.8vw;" class="bt_valider"> RETOUR </button>
            </center>
        </form>   
    </div>
</div>