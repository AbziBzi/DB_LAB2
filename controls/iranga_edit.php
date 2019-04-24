<?php

include 'libraries/iranga.php';
$irangosObj = new iranga();

$formErrors = null;
$data = array();

$required = array('pavadinimas', 'salis', 'id_sunkvezimio_iranga', 'fk_sunkvezimio_numeriai');

$maxLengths = array(
    'fk_sunkvezimio_numeriai' => 7
);

if(!empty($_POST['submit'])) {
    include 'utils/validator.class.php';

    $validations = array (
        'pavadinimas' => 'alfanum',
        'salis' => 'alfanum',
        'kaina' => 'price',
        'id_sunkvezimio_iranga' => 'positivenumber',
        'fk_sunkvezimio_numeriai' => 'alfanum',
    );

    $validator = new validator($validations, $required, $maxLengths);

    if ($validator->validate($_POST)) {
        $dataPrepared = $validator->preparePostFieldsForSQL();

        $irangosObj->updateIranga($dataPrepared);

        header("Location: index.php?module={$module}&action=list");
        die();
    }
    else {
        $formErrors = $validator->getErrorHTML();
        $data = $_POST;
    }
}
else {
    $data = $irangosObj->getIranga($id);
}

$data['editing'] = 1;

?>
