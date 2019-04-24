<?php

include 'libraries/imones.php';
$imonesObj = new imones();

$elementCount = $imonesObj->getImoniuSarasoKieki();

include 'utils/paging.class.php';
$paging = new paging(config::NUMBER_OF_ROWS_IN_PAGE);

$paging->process($elementCount, $pageId);

$data = $imonesObj->getImoniuSarasa($paging->size, $paging->first);

include 'templates/imones_list.php';

?>