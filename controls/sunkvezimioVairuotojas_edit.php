<?php

include 'libraries/sunkvezimioVairuotojas.php';
include 'libraries/sunkvezimiai.php';
include 'libraries/vairuotojai.php';
$vairuotojoObj = new vairuotojai();
$sunkvezimioVairuotojoObj = new sunkvezimioVairuotojas();
$sunkvezimioObj = new sunkvezimiai();

$formErrors = null;
$data = array();

$required = array('nuo_data', 'fk_sunkvezimio_numeriai', 'fk_vairuotojo_asmens_kodas');

$maxLengths = array(
    'fk_sunkvezimio_numeriai' => 7,
    'fk_vairuotojo_asmens_kodas' => 11
);

if(!empty($_POST['submit'])) {
    include 'utils/validator.class.php';

    $validations = array (
        'nuo_data' => 'date',
        'fk_sunkvezimio_numeriai' => 'alfanum',
        'fk_vairuotojo_asmens_kodas' => 'positivenumber'
    );

    $validator = new validator($validations, $required, $maxLengths);

    if($validator->validate($_POST)) {

        $dataPrepared = $validator->preparePostFieldsForSQL();

        $sunkvezimioVairuotojoObj->insertVairuotoja($dataPrepared);

        header("Location: index.php?module={$module}&action=list");
        die();
    }
    else {
        $formErrors = $validator->getErrorHTML();
        $data = $_POST;
    }
}
else {
    if(!empty($id)){
        $data = $sunkvezimioVairuotojoObj->getVairuotoja($id);
    }
}

include 'templates/sunkvezimioVairuotojas_form.php';
?>