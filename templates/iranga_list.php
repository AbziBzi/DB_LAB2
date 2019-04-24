<ul id="pagePath">
    <li><a href="index.php">Pradžia</a></li>
    <li>Sunkvezimiu Iranga</li>
</ul>
<div id="actions">
    <a href='index.php?module=<?php echo $module; ?>&action=create'>Nauja Iranga</a>
</div>
<div class="float-clear"></div>

<?php if(isset($_GET['remove_error'])) { ?>
    <div class="errorBox">
        Imones nebuvo pašalintas, nes turi užsakymą (-ų).
    </div>
<?php } ?>

<table class="listTable">
    <tr>
        <th>ID</th>
        <th>Pavadinimas</th>
        <th>Salis</th>
        <th>Pinigu Kiekis</th>
        <th>Sunkvezimio nr.</th>
        <th></th>
    </tr>
    <?php
    foreach ($data as $key => $val){
        echo
            "<tr>"
            . "<td>{$val['id_sunkvezimio_iranga']}</td>"
            . "<td>{$val['pavadinimas']}</td>"
            . "<td>{$val['salis']}</td>"
            . "<td>{$val['pinigu_kiekis']}</td>"
            . "<td>{$val['fk_sunkvezimio_numeriai']}</td>"
            . "<td>"
            . "<a href='#' onclick='showConfirmDialog(\"{$module}\", \"{$val['id_sunkvezimio_iranga']}\"); return false;' title=''>šalinti</a>&nbsp;"
            . "<a href='index.php?module={$module}&action=edit&id={$val['id_sunkvezimio_iranga']}' title=''>redaguoti</a>"
            . "</td>"
            . "</tr>";
    }
    ?>
</table>

<?php
include 'templates/paging.tpl.php';
?>
