<ul id="pagePath">
    <li><a href="index.php">Pradžia</a></li>
    <li><a href="index.php?module=<?php echo $module; ?>&action=list">Sutartys</a></li>
    <li><?php if(!empty($id)) echo "Sutarties redagavimas"; else echo "Nauja sutartis"; ?></li>
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
            <legend>Sutarties informacija</legend>
            <p>
                <label class="field" for="imone">Įmonė<?php echo in_array('fk_imones_kodas', $required) ? '<span> *</span>' : ''; ?></label>
                <select id="imone" name="fk_imones_kodas">
                    <option value="-1">Pasirinkite įmone</option>
                    <?php
                    $imones = $imonesObj->getImoniuSarasa();
                    foreach($imones as $key => $val) {
                        $selected = "";
                        if(isset($data['fk_imones_kodas']) && $data['fk_imones_kodas'] == $val['imones_kodas']) {
                            $selected = " selected='selected'";
                        }
                        echo "<option{$selected} value='{$val['imones_kodas']}'>{$val['pavadinimas']}</option>";
                    }
                    ?>
                </select>
            </p>
            <p>
                <label class="field" for="vairuotojas">Įmonė<?php echo in_array('fk_vairuotojo_asmens_kodas', $required) ? '<span> *</span>' : ''; ?></label>
                <select id="imone" name="fk_vairuotojo_asmens_kodas">
                    <option value="-1">Pasirinkite Vairuotoją</option>
                    <?php
                    $vairuotojai = $vairuotojoObj->getVairuotojoSarasa();
                    foreach($vairuotojai as $key => $val) {
                        $selected = "";
                        if(isset($data['fk_vairuotojo_asmens_kodas']) && $data['fk_vairuotojo_asmens_kodas'] == $val['asmens_kodas']) {
                            $selected = " selected='selected'";
                        }
                        echo "<option{$selected} value='{$val['asmens_kodas']}'>{$val['vardas']} {$val['pavarde']}</option>";
                    }
                    ?>
                </select>
            </p>
            <p>
                <label class="field" for="numeris">Numeris<?php echo in_array('numeris', $required) ? '<span> *</span>' : ''; ?></label>
                <?php if(!isset($data['editing'])) { ?>
                    <input type="text" id="numeris" name="numeris" class="textbox textbox-150" value="<?php echo isset($data['numeris']) ? $data['numeris'] : ''; ?>" />
                    <?php if(key_exists('numeris', $maxLengths)) echo "<span class='max-len'>(iki {$maxLengths['numeris']} simb.)</span>"; ?>
                <?php } else { ?>
                    <span class="input-value"><?php echo $data['numeris']; ?></span>
                    <input type="hidden" name="editing" value="1" />
                    <input type="hidden" name="numeris" value="<?php echo $data['numeris']; ?>" />
                <?php } ?>
            </p>
            <p>
                <label class="field" for="kaina">Kaina<?php echo in_array('kaina', $required) ? '<span> *</span>' : ''; ?></label>
                <input type="text" id="kaina" name="kaina" class="textbox textbox-150" value="<?php echo isset($data['kaina']) ? $data['kaina'] : ''; ?>">
            </p>
            <p>
                <label class="field" for="referencinis_numeris">Ref. Nr.<?php echo in_array('referencinis_numeris', $required) ? '<span> *</span>' : ''; ?></label>
                <input type="text" id="referencinis_numeris" name="referencinis_numeris" class="textbox textbox-150" value="<?php echo isset($data['referencinis_numeris']) ? $data['referencinis_numeris'] : ''; ?>">
            </p>
        </fieldset>
        <p class="required-note">* pažymėtus laukus užpildyti privaloma</p>
        <p>
            <input type="submit" class="submit button" name="submit" value="Išsaugoti">
        </p>
        <?php if(isset($data['id'])) { ?>
            <input type="hidden" id="id" name="id" value="<?php echo $data['id']; ?>" />
        <?php } ?>
    </form>
</div>