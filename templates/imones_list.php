<ul id="pagePath">
    <li><a href="index.php">Pradžia</a></li>
    <li>Imonės</li>
</ul>
<div id="actions">
    <a href='index.php?module=<?php echo $module; ?>&action=create'>Nauja Imonė</a>
</div>
<div class="float-clear"></div>

<?php if(isset($_GET['remove_error'])) { ?>
    <div class="errorBox">
        Įmonė nebuvo pašalinta, nes turi užsakymą (-ų).
    </div>
<?php } ?>

<table class="listTable">
    <tr>
        <th>Įmonės kodas</th>
        <th>Pavadinimas</th>
        <th>Kontakto vardas</th>
        <th>Kontakto pavardė</th>
        <th>Išsimokėjimas</th>
        <th></th>
    </tr>
    <?php
    foreach ($data as $key => $val){
        echo
            "<tr>"
            . "<td>{$val['imones_kodas']}</td>"
            . "<td>{$val['pavadinimas']}</td>"
            . "<td>{$val['kontakto_vardas']}</td>"
            . "<td>{$val['kontakto_pavarde']}</td>"
            . "<td>{$val['issimokejimas']}</td>"
            . "<td>"
            . "<a href='#' onclick='showConfirmDialog(\"{$module}\", \"{$val['imones_kodas']}\"); return false;' title=''>šalinti</a>&nbsp;"
            . "<a href='index.php?module={$module}&action=edit&id={$val['imones_kodas']}' title=''>redaguoti</a>"
            . "</td>"
            . "</tr>";
    }
    ?>
</table>

<?php
include 'templates/paging.tpl.php';
?>
