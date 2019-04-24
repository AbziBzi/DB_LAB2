<?php

include 'libraries/iranga.php';
$irangosObj = new iranga();

$elementCount = $irangosObj->getIrangosSarasoKieki();

include 'utils/paging.class.php';
$paging = new paging(config::NUMBER_OF_ROWS_IN_PAGE);

$paging->process($elementCount, $pageId);

$data = $irangosObj->getIrangosSarasa($paging->size, $paging->first);

include 'templates/iranga_list.php';

?>