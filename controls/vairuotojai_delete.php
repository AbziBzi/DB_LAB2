<?php

include 'libraries/vairuotojai.php';
$vairuotojaiObje = new vairuotojai();

if(!empty($id)) {

    $removeErrorParameter = '';
    if(!$vairuotojaiObje->deleteVairuotoja($id)) {
        $removeErrorParameter = '&remove_error=1';
    }


    header("Location: index.php?module={$module}&action=list{$removeErrorParameter}");
    die();
}

?>