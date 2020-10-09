<div class="production">
    <div class="prd_titre">
        Consultation des lots par médicament
    </div>

    <div class="prd_contenu">
        <select name="idMedoc" onchange="javascript:refreshPageLot(this.value)">
            <option value="0">-- choisir un médicament --</option>
        <?php
        foreach ($lesMedicaments as $leMedicament) {
            echo '<option value="' . $leMedicament['idMedoc'] . '">' . $leMedicament['libMedoc'] . '</option>';
        }
        ?>
        </select>
    </div>
</div>