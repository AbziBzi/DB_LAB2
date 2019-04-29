<ul id="pagePath">
    <li><a href="index.php">Pradžia</a></li>
    <li>Sutartys</li>
</ul>
<div id="actions">
    <a href='index.php?module=<?php echo $module; ?>&action=create'>Nauja sutartis</a>
</div>
<div class="float-clear"></div>

<?php if(isset($_GET['remove_error'])) { ?>
    <div class="errorBox">
        Sutartis nebuvo pašalinta.
    </div>
<?php } ?>

<table class="listTable">
    <tr>
        <th>Numeris</th>
        <th>Kaina</th>
        <th>Referencinis nr.</th>
        <th>Įmonės kodas</th>
        <th>Vairuotojas</th>
        <th></th>
    </tr>
    <?php
    // suformuojame lentelę
    foreach($data as $key => $val) {
        echo
            "<tr>"
            . "<td>{$val['numeris']}</td>"
            . "<td>{$val['kaina']}</td>"
            . "<td>{$val['referencinis_numeris']}</td>"
            . "<td>{$val['fk_imones_kodas']}</td>"
            . "<td>{$val['fk_vairuotojo_asmens_kodas']}</td>"
            . "<td>"
            . "<a href='#' onclick='showConfirmDialog(\"{$module}\", \"{$val['numeris']}\"); return false;' title=''>šalinti</a>&nbsp;"
            . "<a href='index.php?module={$module}&action=edit&id={$val['numeris']}' title=''>redaguoti</a>"
            . "</td>"
            . "</tr>";
    }
    ?>
</table>

<?php
// įtraukiame puslapių šabloną
include 'templates/paging.tpl.php';
?>