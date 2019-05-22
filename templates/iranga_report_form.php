<div id="formContainer">
    <?php if($formErrors != null) { ?>
        <div class="errorBox">
            Neįvesti arba neteisingai įvesti šie laukai:
            <?php
            echo $formErrors;
            ?>
        </div>
    <?php } ?>
    <form action="" method="post">
        <fieldset>
            <legend>Įveskite ataskaitos kriterijus</legend>
            <p><label class="field" for="pinigaiNuo">Įrangos pinigų kiekis nuo:</label><input type="text" id="pinigaiNuo" name="pinigaiNuo" class="textbox textbox-100" value="<?php echo isset($fields['pinigaiNuo']) ? $fields['pinigaiNuo'] : ''; ?>" /></p>
            <p><label class="field" for="pinigaiIki">Įrangos pinigų kiekis iki:</label><input type="text" id="pinigaiIki" name="pinigaiIki" class="textbox textbox-100" value="<?php echo isset($fields['pinigaiIki']) ? $fields['pinigaiIki'] : ''; ?>" /></p>
        </fieldset>
        <p><input type="submit" class="submit button float-right" name="submit" value="Sudaryti ataskaitą"></p>
    </form>
</div>