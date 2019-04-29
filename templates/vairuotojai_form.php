<ul id="pagePath">
    <li><a href="index.php">Pradžia</a></li>
    <li><a href="index.php?module=<?php echo $module; ?>&action=list">Vairuotojai</a></li>
    <li><?php if(!empty($id)) echo "Paslaugos redagavimas"; else echo "Nauja paslauga"; ?></li>
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
            <legend>Vairuotojo informacija</legend>
            <p>
                <label class="field" for="asmens_kodas">Asmėns kodas<?php echo in_array('asmens_kodas', $required) ? '<span> *</span>' : ''; ?></label>
                <?php if(!isset($data['editing'])) { ?>
                    <input type="text" id="asmens_kodas" name="asmens_kodas" class="textbox textbox-150" value="<?php echo isset($data['asmens_kodas']) ? $data['asmens_kodas'] : ''; ?>" />
                    <?php if(key_exists('asmens_kodas', $maxLengths)) echo "<span class='max-len'>(iki {$maxLengths['asmens_kodas']} simb.)</span>"; ?>
                <?php } else { ?>
                    <span class="input-value"><?php echo $data['asmens_kodas']; ?></span>
                    <input type="hidden" name="editing" value="1" />
                    <input type="hidden" name="asmens_kodas" value="<?php echo $data['asmens_kodas']; ?>" />
                <?php } ?>
            </p>
            <p>
                <label class="field" for="vardas">Vardas<?php echo in_array('vardas', $required) ? '<span> *</span>' : ''; ?></label>
                <input type="text" id="vardas" name="vardas" class="textbox textbox-150" value="<?php echo isset($data['vardas']) ? $data['vardas'] : ''; ?>">
                <?php if(key_exists('vardas', $maxLengths)) echo "<span class='max-len'>(iki {$maxLengths['vardas']} simb.)</span>"; ?>
            </p>
            <p>
                <label class="field" for="pavarde">Pavardė<?php echo in_array('pavarde', $required) ? '<span> *</span>' : ''; ?></label>
                <input type="text" id="pavarde" name="pavarde" class="textbox textbox-150" value="<?php echo isset($data['pavarde']) ? $data['pavarde'] : ''; ?>">
                <?php if(key_exists('pavarde', $maxLengths)) echo "<span class='max-len'>(iki {$maxLengths['pavarde']} simb.)</span>"; ?>
            </p>
            <p>
                <label class="field" for="teisiu_pabaigos_data">Teisiu galiojimas<?php echo in_array('teisiu_pabaigos_data', $required) ? '<span> *</span>' : ''; ?></label>
                <input type="text" id="teisiu_pabaigos_data" name="teisiu_pabaigos_data" class="textbox textbox-150 date" value="<?php echo isset($data['teisiu_pabaigos_data']) ? $data['teisiu_pabaigos_data'] : ''; ?>">
                <?php if(key_exists('teisiu_pabaigos_data', $maxLengths)) echo "<span class='max-len'>(iki {$maxLengths['teisiu_pabaigos_data']} simb.)</span>"; ?>
            </p>
            <p>
                <label class="field" for="gimimo_data">Gimimo data<?php echo in_array('gimimo_data', $required) ? '<span> *</span>' : ''; ?></label>
                <input type="text" id="gimimo_data" name="gimimo_data" class="textbox textbox-150 date" value="<?php echo isset($data['gimimo_data']) ? $data['gimimo_data'] : ''; ?>">
                <?php if(key_exists('gimimo_data', $maxLengths)) echo "<span class='max-len'>(iki {$maxLengths['gimimo_data']} simb.)</span>"; ?>
            </p>
            <p>
                <label class="field" for="sutarties_data">Sutarties pasirašymo data<?php echo in_array('sutarties_data', $required) ? '<span> *</span>' : ''; ?></label>
                <input type="text" id="sutarties_data" name="sutarties_data" class="textbox textbox-150 date" value="<?php echo isset($data['sutarties_data']) ? $data['sutarties_data'] : ''; ?>">
                <?php if(key_exists('sutarties_data', $maxLengths)) echo "<span class='max-len'>(iki {$maxLengths['sutarties_data']} simb.)</span>"; ?>
            </p>
            <p>
                <label class="field" for="telefono_numeris">Telefono nr.<?php echo in_array('telefono_numeris', $required) ? '<span> *</span>' : ''; ?></label>
                <input type="text" id="telefono_numeris" name="telefono_numeris" class="textbox textbox-150" value="<?php echo isset($data['telefono_numeris']) ? $data['telefono_numeris'] : ''; ?>">
                <?php if(key_exists('telefono_numeris', $maxLengths)) echo "<span class='max-len'>(iki {$maxLengths['telefono_numeris']} simb.)</span>"; ?>
            </p>
        </fieldset>
        <p class="required-note">* pažymėtus laukus užpildyti privaloma</p>
        <p>
            <input type="submit" class="submit button" name="submit" value="Išsaugoti">
        </p>
    </form>
</div>