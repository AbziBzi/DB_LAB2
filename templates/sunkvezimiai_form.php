<ul id="pagePath">
    <li><a href="index.php">Pradžia</a></li>
    <li><a href="index.php?module=<?php echo $module; ?>&action=list">Darbuotojai</a></li>
    <li><?php if(!empty($id)) echo "Darbuotojo redagavimas"; else echo "Naujas darbuotojas"; ?></li>
</ul>
<div class="float-clear"></div>
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
            <legend>Sunkvežimio informacija</legend>
            <p>
                <label class="field" for="numeriai">Valstybinis numeris<?php echo in_array('numeriai', $required) ? '<span> *</span>' : ''; ?></label>
                <?php if(!isset($data['editing'])) { ?>
                    <input type="text" id="numeriai" name="numeriai" class="textbox textbox-150" value="<?php echo isset($data['numeriai']) ? $data['numeriai'] : ''; ?>" />
                    <?php if(key_exists('numeriai', $maxLengths)) echo "<span class='max-len'>(iki {$maxLengths['numeriai']} simb.)</span>"; ?>
                <?php } else { ?>
                    <span class="input-value"><?php echo $data['numeriai']; ?></span>
                    <input type="hidden" name="editing" value="1" />
                    <input type="hidden" name="numeriai" value="<?php echo $data['numeriai']; ?>" />
                <?php } ?>
            </p>
            <p>
                <label class="field" for="marke">Markė<?php echo in_array('marke', $required) ? '<span> *</span>' : ''; ?></label>
                <input type="text" id="marke" name="marke" class="textbox textbox-150" value="<?php echo isset($data['marke']) ? $data['marke'] : ''; ?>"></p>
            <p>
            <p>
                <label class="field" for="modelis">Modelis<?php echo in_array('modelis', $required) ? '<span> *</span>' : ''; ?></label>
                <input type="text" id="modelis" name="modelis" class="textbox textbox-150" value="<?php echo isset($data['modelis']) ? $data['modelis'] : ''; ?>"></p>
            <p>
            <p>
                <label class="field" for="pagaminimo_data">Pagaminimo data<?php echo in_array('pagaminimo_data', $required) ? '<span> *</span>' : ''; ?></label>
                <input type="text" id="pagaminimo_data" name="pagaminimo_data" class="textbox textbox-150 date" value="<?php echo isset($data['pagaminimo_data']) ? $data['pagaminimo_data'] : ''; ?>"></p>
            <p>
            <p>
                <label class="field" for="registravimo_data">Registravimo data<?php echo in_array('registravimo_data', $required) ? '<span> *</span>' : ''; ?></label>
                <input type="text" id="registravimo_data" name="registravimo_data" class="textbox textbox-150 date" value="<?php echo isset($data['registravimo_data']) ? $data['registravimo_data'] : ''; ?>"></p>
            <p>
            <p>
                <label class="field" for="rida">Rida<?php echo in_array('rida', $required) ? '<span> *</span>' : ''; ?></label>
                <input type="text" id="rida" name="rida" class="textbox textbox-150" value="<?php echo isset($data['rida']) ? $data['rida'] : ''; ?>" />
            </p>
        </fieldset>
        <p class="required-note">* pažymėtus laukus užpildyti privaloma</p>
        <p>
            <input type="submit" class="submit button" name="submit" value="Išsaugoti">
        </p>
    </form>
</div>