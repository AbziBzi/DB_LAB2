<?php

include 'libraries/sunkvezimioVairuotojas.php';
$sunkvezimioVairuotojoObj = new sunkvezimioVairuotojas();

if(!empty($id)) {

    $removeErrorParameter = '';
    if(!$sunkvezimioVairuotojoObj->deleteVairuotoja($id)) {
        $removeErrorParameter = '&remove_error=1';
    }


    header("Location: index.php?module={$module}&action=list{$removeErrorParameter}");
    die();
}

?>