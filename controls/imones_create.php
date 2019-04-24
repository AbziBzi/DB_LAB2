<?php

include 'libraries/imones.php';
$imonesObj = new imones();

$formErrors = null;
$data = array();

$required = array('pavadinimas', 'kontakto_vardas', 'kontakto_pavarde', 'imones_kodas');

$maxLength = array(
    'imones_kodas' => 9
);

if(!empty($_POST['submit'])) {
    include 'utils/validator.class.php';

    $validations = array (
        'pavadinimas' => 'alfnum',
        'kontakto_vardas' => 'alfanum',
        'kontakto_pavarde' => 'alfanum',
        'issimokejimas' => 'positivenumber',
        'imones_kodas' => 'positivenumber'
    );

    $validator = new validator($validations, $required, $maxLengths);

    if($validator->validate($_POST)) {
        $dataPrepared = $validator->preparePostFieldsForSQL();
        $imonesObj->insertImone($dataPrepared);
        header("Location: index.php?module={$module}&action=list");
        die();
    }
    else {
        $formErrors = $validator->getErrorHTML();
        $data = $_POST;
    }
}

include 'templates/imones_form.php';
