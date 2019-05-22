<ul id="reportInfo">
    <li class="title">Įrangos ataskaita</li>
    <li>Sudarymo data: <span><?php echo date("Y-m-d"); ?></span></li>
    <li>Sutarčių sudarymo pinigų aibė:
        <span>
		<?php
        if(!empty($data['pinigaiNuo']) || ($data['pinigaiNuo'] == 0)) {
            if(!empty($data['pinigaiIki'])) {
                echo "nuo {$data['pinigaiNuo']} iki {$data['pinigaiIki']}";
            } else {
                echo "nuo {$data['pinigaiNuo']}";
            }
        } else {
            if(!empty($data['pinigaiIki'])) {
                echo "iki {$data['pinigaiIki']}";
            } else {
                echo "nenurodyta";
            }
        }
        ?>
		</span>
    </li>
</ul>



<?php
if(sizeof($irangosData) > 0) { ?>
    <table class="reportTable">
        <tr>
            <th>Įrangos ID</th>
            <th>Sunkvežimio Numeriai</th>
            <th>Šalis</th>
            <th class="width150">Pinigų kiekis</th>
        </tr>

        <?php
        // suformuojame lentelę
        for($i = 0; $i < sizeof($irangosData); $i++) {

            if($i == 0 || $irangosData[$i]['sunkvezimio_numeriai'] != $irangosData[$i-1]['sunkvezimio_numeriai']) {
                echo
                    "<tr>"
                    . "<td class='groupSeparator' colspan='4'>{$irangosData[$i]['sunkvezimio_numeriai']}</td>"
                    . "</tr>";
            }

            echo
                "<tr>"
                . "<td># {$irangosData[$i]['id']}</td>"
                . "<td>{$irangosData[$i]['pavadinimas']}</td>"
                . "<td>{$irangosData[$i]['salis']}</td>"
                . "<td>{$irangosData[$i]['pinigu_kiekis']} &euro;</td>"
                . "</tr>";


        }
        ?>


        <tr>
            <td class='groupSeparator' colspan='4'>Bendra Suma</td>
        </tr>

        <tr class="aggregate">
            <td></td>
            <td class="label" style="text-align: right" colspan="2"></td>
            <td class="border"><?php echo "{$servicesStats[0]['suma']}"; ?> &euro;</td>
        </tr>
    </table>
    <a href="index.php?module=iranga&action=report" title="Nauja ataskaita" style="margin-bottom: 15px" class="button large float-right">nauja ataskaita</a>
    <?php
} else {
    ?>
    <div class="warningBox">
        Nurodytu pinigų kiekio nebuvo
    </div>
    <?php
}
?>