<div class="production">
    <div class="prd_titre">
        Consultation des lots par date
    </div>
    
    <div class="prd_contenu">        
        <select name="date" onchange="javascript:refreshPageDate(this.value)">
            <option value="0">-- choisir une date --</option>
        <?php
        foreach ($lesDates as $laDate) {
            echo '<option value="' . $laDate['dateFabrication'] . '">' . $laDate['dateFabrication'] . '</option>';
        }
        ?>
        </select>
    </div>
</div>