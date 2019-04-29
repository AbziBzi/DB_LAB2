<ul id="pagePath">
    <li><a href="index.php">Pradžia</a></li>
    <li>Sunkvežimių vairuotojai</li>
</ul>
<div id="actions">
    <a href='index.php?module=<?php echo $module; ?>&action=create'>Naujas sunkvežimio vairuotojas</a>
</div>
<div class="float-clear"></div>

<?php if(isset($_GET['remove_error'])) { ?>
    <div class="errorBox">
        Vairuotojas nebuvo pašalintas
    </div>
<?php } ?>

<table class="listTable">
    <tr>
        <th>ID</th>
        <th>Vairuotojas</th>
        <th>Sunkvežimis</th>
        <th>Nuo</th>
        <th>Iki</th>
        <th></th>
    </tr>
    <?php
    // suformuojame lentelę
    foreach($data as $key => $val) {
        echo
            "<tr>"
            . "<td>{$val['id_sunkvezimio_vairuotojas']}</td>"
            . "<td>{$val['vairuotojo_vardas']} {$val['vairuotojo_pavarde']}</td>"
            . "<td>{$val['sunkvezimio_numeriai']}</td>"
            . "<td>{$val['nuo_data']}</td>"
            . "<td>{$val['iki_data']}</td>"
            . "<td>"
            . "<a href='#' onclick='showConfirmDialog(\"{$module}\", \"{$val['id_sunkvezimio_vairuotojas']}\"); return false;' title=''>šalinti</a>&nbsp;"
            . "<a href='index.php?module={$module}&action=edit&id={$val['id_sunkvezimio_vairuotojas']}' title=''>redaguoti</a>"
            . "</td>"
            . "</tr>";
    }
    ?>
</table>

<?php
// įtraukiame puslapių šabloną
include 'templates/paging.tpl.php';
?>