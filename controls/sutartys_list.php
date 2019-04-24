<?php

include 'libraries/sutartys.php';
$sutartiesObj = new sutartys();

$elementCount = $sutartiesObj->getSutarciuSarasoKieki();

include 'utils/paging.class.php';
$paging = new paging(config::NUMBER_OF_ROWS_IN_PAGE);

$paging->process($elementCount, $pageId);

$data = $sutartiesObj->getSutarciuSarasa($paging->size, $paging->first);

include 'templates/sutartys_list.php';

?>