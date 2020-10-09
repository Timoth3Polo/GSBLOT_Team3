<div class="direction">
    <div class = "dir_titre">
		Consultation des médecins visités par un visiteur
	</div>

    <div class = "dir_contenue">
	    <select name="numUt" onchange="javascript:refreshPageMedVisit(this.value)">
        <option value="0">-- choisir un visiteur --</option>
    <?php
    foreach ($lesVisiteurs as $leVisiteur) {
        echo '<option value="' . $leVisiteur['numUt'] . '">' . $leVisiteur['nomUt'] . " " . $leVisiteur['prenomUt'] . '</option>';
    }
    ?>
    </select>
	</div>   

    
</div>