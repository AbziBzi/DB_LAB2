<?php

include 'libraries/imones.php';
$imonesObj = new imones();

if(!empty($id)) {

    $removeErrorParameter = '';
    if(!$imonesObj->deleteImone($id)) {
        $removeErrorParameter = '&remove_error=1';
    }


    header("Location: index.php?module={$module}&action=list{$removeErrorParameter}");
    die();
}

?>