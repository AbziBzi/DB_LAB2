<ul id="pagePath">
    <li><a href="index.php">Pradžia</a></li>
    <li>Sunkvežimių Įranga</li>
</ul>
<div id="actions">
    <a href='index.php?module=<?php echo $module; ?>&action=create'>Nauja įranga</a>
</div>
<div class="float-clear"></div>

<?php if(isset($_GET['remove_error'])) { ?>
    <div class="errorBox">
        Įranga nebuvo pašalinta, nes yra naudojama.
    </div>
<?php } ?>

<table class="listTable">
    <tr>
        <th>ID</th>
        <th>Pavadinimas</th>
        <th>Šalis</th>
        <th>Pinigų kiekis</th>
        <th>Sunkvežimio nr.</th>
        <th></th>
    </tr>
    <?php
    foreach ($data as $key => $val){
        echo
            "<tr>"
            . "<td>{$val['id']}</td>"
            . "<td>{$val['pavadinimas']}</td>"
            . "<td>{$val['salis']}</td>"
            . "<td>{$val['pinigu_kiekis']}</td>"
            . "<td>{$val['fk_sunkvezimio_numeriai']}</td>"
            . "<td>"
            . "<a href='#' onclick='showConfirmDialog(\"{$module}\", \"{$val['id']}\"); return false;' title=''>šalinti</a>&nbsp;"
            . "<a href='index.php?module={$module}&action=edit&id={$val['id']}' title=''>redaguoti</a>"
            . "</td>"
            . "</tr>";
    }
    ?>
</table>

<?php
include 'templates/paging.tpl.php';
?>
