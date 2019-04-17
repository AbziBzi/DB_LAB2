<?php

include 'libraries/vairuotojai.php';
$vairuotojaiObje = new vairuotojai();

if(!empty($id)) {
    $count = $vairuotojaiObje->getContractCountOfVairuotojas($id);

    $removeErrorParameter = '';
    if($count == 0) {
        // šaliname klientą
        $vairuotojaiObje->deleteVairuotoja($id);
    } else {
        // nepašalinome, nes klientas sudaręs bent vieną sutartį, rodome klaidos pranešimą
        $removeErrorParameter = '&remove_error=1';
    }

    // nukreipiame į klientų puslapį
    header("Location: index.php?module={$module}&action=list{$removeErrorParameter}");
    die();
}

?>