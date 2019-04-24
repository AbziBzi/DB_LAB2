<ul id="pagePath">
    <li><a href="index.php">Pradžia</a></li>
    <li>Sunkvezimiai</li>
</ul>
<div id="actions">
    <a href='index.php?module=<?php echo $module; ?>&action=create'>Naujas vairuotojas</a>
</div>
<div class="float-clear"></div>

<?php if(isset($_GET['remove_error'])) { ?>
    <div class="errorBox">
        Vairuotojas nebuvo pašalintas, nes turi užsakymą (-ų).
    </div>
<?php } ?>

<table class="listTable">
    <tr>
        <th>Numeriai</th>
        <th>Marke</th>
        <th>Modelis</th>
        <th>Pagaminimo data</th>
        <th>Registravimo data</th>
        <th>Rida</th>
        <th></th>
    </tr>
    <?php
    foreach ($data as $key => $val){
        echo
            "<tr>"
            . "<td>{$val['numeriai']}</td>"
            . "<td>{$val['marke']}</td>"
            . "<td>{$val['modelis']}</td>"
            . "<td>{$val['pagaminimo_data']}</td>"
            . "<td>{$val['registravimo_data']}</td>"
            . "<td>{$val['rida']}</td>"
            . "<td>"
            . "<a href='#' onclick='showConfirmDialog(\"{$module}\", \"{$val['numeriai']}\"); return false;' title=''>šalinti</a>&nbsp;"
            . "<a href='index.php?module={$module}&action=edit&id={$val['numeriai']}' title=''>redaguoti</a>"
            . "</td>"
            . "</tr>";
    }
    ?>
</table>

<?php
include 'templates/paging.tpl.php';
?>
