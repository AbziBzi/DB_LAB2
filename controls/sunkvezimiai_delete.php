<?php

include 'libraries/sunkvezimiai.php';

$sunkvezimioObj = new sunkvezimiai();

if(!empty($id)) {

    $removeErrorParameter = '';
    if(!$sunkvezimioObj->deleteSunkvezimi($id)) {
        $removeErrorParameter = '&remove_error=1';
    }


    header("Location: index.php?module={$module}&action=list{$removeErrorParameter}");
    die();
}
?>