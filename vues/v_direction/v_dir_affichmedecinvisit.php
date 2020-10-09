<div class="direction">
    <div class = "dir_titre">
        Liste des médecins visités par un visiteur
    </div>

    <div class = "dir_contenue">
            <table class="table table-striped">   
                <tr>
                    <th>Nom médecin</th>
                    <th>Prénom médecin</th>
                    <th>Nombre échantillons</th>
                </tr>
            <?php
                foreach ($medecinVisite as $lemedecinVisite) 
                {
                    echo '<tr>'
                    . '<td>' . $lemedecinVisite['nomMedecin'] . '</td>'
                    . '<td>' . $lemedecinVisite['prenomMedecin'] . '</td>'
                    . '<td>' . $lemedecinVisite['nb_echantillon'] . '</td>'
                    . '</tr>';
                }
            ?>
        </table>
    </div>   
        <form id = "retour" method = "POST" action = "index.php?uc=dir_affiMedVisit&action=selectVisiteur" style = "font-size:1.5vw; margin-top: 1vw;">
            <center>
                <button type = "submit" class = "bt_valider" style = "font-size : 0.8vw;"> RETOUR </button>
            </center>
            </form>
</div>