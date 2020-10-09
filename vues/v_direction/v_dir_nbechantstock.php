<div class="direction">
    <div class = "dir_titre">
        Liste des échantillons en stock
    </div>

    <div class = "dir_contenue">
            <table class="table table-striped">   
                <tr>
                    <th>Nom médicament</th>
                    <th>Nombre échantillons</th>
                </tr>
            <?php
                foreach ($LesEchantillonStock as $EchantillonStock) 
                {
                    echo '<tr>'
                    . '<td>' . $EchantillonStock['libMedoc'] . '</td>'
                    . '<td>' . $EchantillonStock['nb_Echant'] . '</td>'
                    . '</tr>';
                }
            ?>
        </table>
    </div>  
        <form id = "retour" method = "POST" action = "index.php?uc=dir_nbEnchantillon" style = "font-size:1.5vw; margin-top: 1vw;">
            <center>
                <button type = "submit" class = "bt_valider" style = "font-size : 0.8vw;"> RETOUR </button>
            </center>
            </form>   
</div>