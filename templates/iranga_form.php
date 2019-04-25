<ul id="pagePath">
    <li><a href="index.php">Pradžia</a></li>
    <li><a href="index.php?module=<?php echo $module; ?>&action=list">Sunkvežimių įranga</a></li>
    <li><?php if(!empty($id)) echo "Įrangos redagavimas"; else echo "Nauja įranga"; ?></li>
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
            <legend>Įrangos informacija</legend>
            <p>
                <label class="field" for="sunvezimis">Markė<?php echo in_array('fk_sunkvezimio_numeriai', $required) ? '<span> *</span>' : ''; ?></label>
                <select id="sunvezimis" name="fk_sunkvezimio_numeriai">
                    <option value="-1">Pasirinkite sunkvežimį</option>
                    <?php
                    $sunkvezimiai = $sunkvezimioObj->getSunkvezimioSarasa();
                    foreach($sunkvezimiai as $key => $val) {
                        $selected = "";
                        if(isset($data['fk_sunkvezimio_numeriai']) && $data['fk_sunkvezimio_numeriai'] == $val['numeriai']) {
                            $selected = " selected='selected'";
                        }
                        echo "<option{$selected} value='{$val['numeriai']}'>{$val['numeriai']}</option>";
                    }
                    ?>
                </select>
            </p>
            <p>
                <label class="field" for="name">Pavadinimas<?php echo in_array('pavadinimas', $required) ? '<span> *</span>' : ''; ?></label>
                <input type="text" id="name" name="pavadinimas" class="textbox textbox-150" value="<?php echo isset($data['pavadinimas']) ? $data['pavadinimas'] : ''; ?>">
            </p>
            <p>
                <label class="field" for="salis">Šalis<?php echo in_array('salis', $required) ? '<span> *</span>' : ''; ?></label>
                <input type="text" id="salis" name="salis" class="textbox textbox-150" value="<?php echo isset($data['salis']) ? $data['salis'] : ''; ?>">
            </p>
            <p>
                <label class="field" for="pinigu_kiekis">Pinigų kiekis<?php echo in_array('pinigu_kiekis', $required) ? '<span> *</span>' : ''; ?></label>
                <input type="text" id="pinigu_kiekis" name="pinigu_kiekis" class="textbox textbox-150" value="<?php echo isset($data['pinigu_kiekis']) ? $data['pinigu_kiekis'] : ''; ?>">
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