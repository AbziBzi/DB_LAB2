<?php

include 'libraries/vairuotojai.php';
$vairuotojoObj = new vairuotojai();

$elementCount = $vairuotojoObj->getVairuotojoSarasoKieki();

include 'utils/paging.class.php';
$paging = new paging(config::NUMBER_OF_ROWS_IN_PAGE);

$paging->process($elementCount, $pageId);

$data = $vairuotojoObj->getVairuotojoSarasa($paging->size, $paging->first);

include 'templates/vairuotojai_list.php';

?>