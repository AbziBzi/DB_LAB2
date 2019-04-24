<?php

include 'libraries/sutartys.php';
$sutartiesObj = new sutartys();

if(!empty($id)) {

    $removeErrorParameter = '';
    if(!$sutartiesObj->deleteSutarty($id)) {
        $removeErrorParameter = '&remove_error=1';
    }


    header("Location: index.php?module={$module}&action=list{$removeErrorParameter}");
    die();
}

?>