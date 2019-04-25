<ul id="pagePath">
    <li><a href="index.php">Pradžia</a></li>
    <li><a href="index.php?module=<?php echo $module; ?>&action=list">Įmonės</a></li>
    <li><?php if(!empty($id)) echo "Įmonės redagavimas"; else echo "Nauja įmonė"; ?></li>
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
            <legend>Įmonės informacija</legend>
            <p>
                <label class="field" for="imones_kodas">Valstybinis numeris<?php echo in_array('imones_kodas', $required) ? '<span> *</span>' : ''; ?></label>
                <?php if(!isset($data['editing'])) { ?>
                    <input type="text" id="imones_kodas" name="imones_kodas" class="textbox textbox-150" value="<?php echo isset($data['imones_kodas']) ? $data['imones_kodas'] : ''; ?>" />
                    <?php if(key_exists('imones_kodas', $maxLengths)) echo "<span class='max-len'>(iki {$maxLengths['imones_kodas']} simb.)</span>"; ?>
                <?php } else { ?>
                    <span class="input-value"><?php echo $data['imones_kodas']; ?></span>
                    <input type="hidden" name="editing" value="1" />
                    <input type="hidden" name="imones_kodas" value="<?php echo $data['imones_kodas']; ?>" />
                <?php } ?>
            </p>
            <p>
                <label class="field" for="pavadinimas">Pavadinimas<?php echo in_array('pavadinimas', $required) ? '<span> *</span>' : ''; ?></label>
                <input type="text" id="pavadinimas" name="pavadinimas" class="textbox textbox-150" value="<?php echo isset($data['pavadinimas']) ? $data['pavadinimas'] : ''; ?>"></p>
            <p>
            <p>
                <label class="field" for="kontakto_vardas">Vardas<?php echo in_array('kontakto_vardas', $required) ? '<span> *</span>' : ''; ?></label>
                <input type="text" id="kontakto_vardas" name="kontakto_vardas" class="textbox textbox-150" value="<?php echo isset($data['kontakto_vardas']) ? $data['kontakto_vardas'] : ''; ?>"></p>
            <p>
            <p>
                <label class="field" for="kontakto_pavarde">Pavardė<?php echo in_array('kontakto_pavarde', $required) ? '<span> *</span>' : ''; ?></label>
                <input type="text" id="kontakto_pavarde" name="kontakto_pavarde" class="textbox textbox-150" value="<?php echo isset($data['kontakto_pavarde']) ? $data['kontakto_pavarde'] : ''; ?>"></p>
            <p>
            <p>
                <label class="field" for="issimokejimas">Išsimokėjimas</label>
                <input type="checkbox" id="issimokejimas" name="issimokejimas"<?php echo (isset($data['issimokejimas']) && ($data['issimokejimas'] == 1 || $data['issimokejimas'] == 'on'))  ? ' checked="checked"' : ''; ?>>
            </p>
        </fieldset>
        <p class="required-note">* pažymėtus laukus užpildyti privaloma</p>
        <p>
            <input type="submit" class="submit button" name="submit" value="Išsaugoti">
        </p>
    </form>
</div>