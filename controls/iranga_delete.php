<?php

include 'libraries/iranga.php';
$irangosObj = new iranga();

if(!empty($id)) {

    $removeErrorParameter = '';
    if(!$irangosObj->deleteIranga($id)) {
        $removeErrorParameter = '&remove_error=1';
    }


    header("Location: index.php?module={$module}&action=list{$removeErrorParameter}");
    die();
}

?>