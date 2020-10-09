<div class="direction">
    <div class = "dir_titre">
        Liste des échantillons laissés aux médecins
    </div>

    <div class = "dir_contenue">
            <table class="table table-striped">   
                <tr>
                    <th>Nom médicament</th>
                    <th>Nombre échantillons</th>
                </tr>
            <?php
                foreach ($LesEchantillonLaisses as $EchantillonLaisses) 
                {
                    echo '<tr>'
                    . '<td>' . $EchantillonLaisses['libMedoc'] . '</td>'
                    . '<td>' . $EchantillonLaisses['nb_Echant'] . '</td>'
                    . '</tr>';
                }
            ?>
        </table>

        <form id = "retour" method = "POST" action = "index.php?uc=dir_nbEnchantillon" style = "font-size:1.5vw; margin-top: 1vw;">
            <center>
                <button type = "submit" class = "bt_valider" style = "font-size : 0.8vw;" class="bt_valider"> RETOUR </button>
            </center>
        </form>   
    </div>
</div>