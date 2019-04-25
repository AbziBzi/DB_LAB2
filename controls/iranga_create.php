<?php

include 'libraries/iranga.php';
include 'libraries/sunkvezimiai.php';
$irangosObj = new iranga();
$sunkvezimioObj = new sunkvezimiai();

$formErrors = null;
$data = array();

$required = array('pavadinimas', 'salis', 'fk_sunkvezimio_numeriai');

$maxLengths = array(
    'fk_sunkvezimio_numeriai' => 7
);

if(!empty($_POST['submit'])) {

    $validations = array (
        'pavadinimas' => 'alfanum',
        'salis' => 'alfanum',
        'pinigu_kiekis' => 'price',
        'fk_sunkvezimio_numeriai' => 'alfanum'
    );

    include 'utils/validator.class.php';
    $validator = new validator($validations, $required, $maxLengths);

    if($validator->validate($_POST)) {
        $dataPrepared = $validator->preparePostFieldsForSQL();

        $irangosObj->insertIranga($dataPrepared);

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
        $data = $irangosObj->getIranga($id);
    }
}

include 'templates/iranga_form.php';
?>
