<?php

include 'libraries/sunkvezimiai.php';
$sunkvezimioObj = new sunkvezimiai();

$elementsCount = $sunkvezimioObj->getSunkvezimioSarasoKieki();

include 'utils/paging.class.php';
$paging = new paging(config::NUMBER_OF_ROWS_IN_PAGE);

$paging->process($elementsCount, $pageId);

$data = $sunkvezimioObj->getSunkvezimioSarasa($paging->size, $paging->first);

include 'templates/sunkvezimiai_list.php';
?>