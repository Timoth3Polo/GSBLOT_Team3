<div class="production">
    <div class="prd_titre">
        Vérifier si le lot est bien ajouté
    </div>
   
    <div class="prd_contenu">
        <table class="table">   
            <tr>
                <th>N° Lot</th>
                <th>Date</th>
                <th>Médicament</th>
                <th>Nombre d'échantillon</th>
            </tr>
        <?php
            foreach ($lesLots as $leLot) 
            {
                echo '<tr>'
                . '<td>' . $leLot['numLot'] . '</td>'
                . '<td>' . $leLot['dateFabrication'] . '</td>'
                . '<td>' . $leLot['idMedoc'] . '</td>'
                . '<td>' . $leLot['nb_Echant'] . '</td>'
                . '</tr>';
            }
        ?>
        </table>
    </div>
        <form id = "retour" method = "POST" action = "index.php?uc=prdAjouterLot" style = "font-size:1.5vw; margin-top: 1vw;">
        <center>
        <button type = "submit" class = "bt_valider" style = "font-size : 0.8vw;"> RETOUR </button>
        </center>
        </form> 
</div>