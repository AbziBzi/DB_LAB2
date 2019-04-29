<?php

include 'libraries/sunkvezimioVairuotojas.php';
$sunkVairObj = new sunkvezimioVairuotojas();

$elementCount = $sunkVairObj->getVairuotojoSarasoKieki();

include 'utils/paging.class.php';
$paging = new paging(config::NUMBER_OF_ROWS_IN_PAGE);

$paging->process($elementCount, $pageId);

$data = $sunkVairObj->getVairuotojoSarasa($paging->size, $paging->first);

include 'templates/sunkvezimioVairuotojas_list.php';

?>