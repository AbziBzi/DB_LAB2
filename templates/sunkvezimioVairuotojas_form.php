<ul id="pagePath">
    <li><a href="index.php">Pradžia</a></li>
    <li><a href="index.php?module=<?php echo $module; ?>&action=list">Sunkvežimių vairuotojai</a></li>
    <li><?php if(!empty($id)) echo "Vairuotojo redagavimas"; else echo "Naujas vairuotojas"; ?></li>
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
                <label class="field" for="sunkvezimis">Sunkvežimis<?php echo in_array('fk_sunkvezimio_numeriai', $required) ? '<span> *</span>' : ''; ?></label>
                <select id="sunkvezimis" name="fk_sunkvezimio_numeriai">
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
                <label class="field" for="vairuotojas">Vairuotojas<?php echo in_array('fk_vairuotojo_asmens_kodas', $required) ? '<span> *</span>' : ''; ?></label>
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
                <label class="field" for="nuo_data">Nuo<?php echo in_array('nuo_data', $required) ? '<span> *</span>' : ''; ?></label>
                <input type="text" id="nuo_data" name="nuo_data" class="textbox textbox-150 date" value="<?php echo isset($data['nuo_data']) ? $data['nuo_data'] : ''; ?>">
            </p>
            <p>
                <label class="field" for="iki_data">Iki<?php echo in_array('iki_data', $required) ? '<span> *</span>' : ''; ?></label>
                <input type="text" id="iki_data" name="iki_data" class="textbox textbox-150 date" value="<?php echo isset($data['iki_data']) ? $data['iki_data'] : ''; ?>">
            </p>
        </fieldset>
        <p class="required-note">* pažymėtus laukus užpildyti privaloma</p>
        <p>
            <input type="submit" class="submit button" name="submit" value="Išsaugoti">
        </p>
        <?php if(isset($data['id_sunkvezimio_vairuotojas'])) { ?>
            <input type="hidden" id="id" name="id" value="<?php echo $data['id_sunkvezimio_vairuotojas']; ?>" />
        <?php } ?>
    </form>
</div>